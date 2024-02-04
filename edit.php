<?php
// acquire shared info from other files
include("dbConnect.php"); // database connection 

// make database connection
$conn = dbConnect();
$ID = "";

function generateRandomNumber() {
    
    // Generate a random number between 100000 and 999999
    $randomNumber = mt_rand(1000, 9999);
    return $randomNumber;
}
                    				 
// Process only if there is any submission
if (isset($_POST['Submit'])) {

	// ==========================
	//validate user input
	
	// set up the required array 
	$required = array("firstName", "lastName", "email", "studentID", "eventID" ); // note that, in this array, the spelling of each item should match the form field names

    $requirededit = array("firstName", "lastName", "email", "studentID", "eventID", "code"); // note that, in this array, the spelling of each item should match the form field names
	// set up the expected array
	$expected = array("firstName", "lastName", "email", "studentID", "eventID", "ID", "code"); // again, the spelling of each item should match the form field names
    
    // set up a label array, use the field name as the key and label as the value
    $label = array ('firstName'=>'First Name', "lastName"=>'Last Name', "email"=>'Email', "studentID"=>'Student ID', "eventID" => 'Event ID', "ID"=>'ID', "code" => 'Code');


	$missing = array();
	
	foreach ($expected as $field){

		if (in_array($field, $required) && empty($_POST[$field])) {
			array_push ($missing, $field);
		
		} else {
                
    			if (!isset($_POST[$field])) {
    				${$field} = "";
    			} else {
    				
    				${$field} = $_POST[$field];
    				
    			}
    		}

	}

	if (empty($missing)){

		//========================
		// processing user input

		$stmt = $conn->stmt_init();
         
        $stmt_prepared = 0;
		if ($ID != "") {
			/* there is an existing pid ==> need to deal with an existing reocrd ==> use an update query */ 
			// Ensure $pid contains an integer. 
			$ID = intval($ID); 
			
			$code = $_POST['code'];
			
			$check_code = "SELECT code FROM EventStudent WHERE ID = ? AND code = ?";

            if($stmt->prepare($check_code)) {
                $stmt->bind_param('ii', $ID, $code);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows === 1) {
                    $sql = "Update EventStudent SET firstName = ?, lastName = ?, email = ?, studentID = ?, eventID = ? WHERE ID = ?";
        			if($stmt->prepare($sql)){
            			$stmt->bind_param('sssiii',$firstName, $lastName, $email, $studentID, $eventID, $ID);
            			$stmt_prepared = 1;// set up a variable to signal that the query statement is successfully prepared.
                        
        			}
                } else {
                     $output = "<div class='error'>Wrong code. Try again.</div>";
                }
                
            }

		} else {
			// no existing pid ==> this means no existing record to deal with, then it must be a new record ==> use an insert query
    			$sql = "Insert Into EventStudent (firstName, lastName, email, studentID, eventID, code) values (?, ?, ?, ?, ?, ?)";
    
    			if($stmt->prepare($sql)){
    				// generate random code
    				$code = generateRandomNumber();
    				$stmt->bind_param('sssiii',$firstName, $lastName, $email, $studentID, $eventID, $code);
    				$stmt_prepared = 1; // set up a variable to signal that the query statement is successfully prepared.
    			}
		}

		if ($stmt_prepared == 1){
			if ($stmt->execute()){
                // 	email confirmation
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $studentID = $_POST['studentID'];
                $eventID = $_POST['eventID'];
                $email = $_POST['email'];
                    
                $to="$email";
                $subject="Event Registration Confirmation";
                $header="From: Maverick Advantage Admin"; 
                $message="Thank you for registrating an event with Maverick Advantage! Please allow 24 hours for us to get back to you.
                    First Name: $firstName
                    Last Name: $lastName
                    Student ID: $studentID
                    Event: $eventID
                    Email: $email
                    Code: $code
                    "; 
                $mailSent = mail($to,$subject,$message,$header);
				$output = "<span class='success'>Success!</span><p>The following information has been saved in the database:</p>";
				foreach($expected as $key){
					$output .= "<b>{$label[$key]}</b>: {$_POST[$key]} <br>";
				}
				$output .= "To edit or delete, specific code has been sent to your email $email!<br><br>";
				$output .= "Check your input information <a href='studentList.php'>here</a>";
			} else {
				//$stmt->execute() failed.
				$output = "<div class='error'>Database operation failed.  Please contact the webmaster.</div>";
			}
		} else {
			// statement is not successfully prepared (issues with the query).
			$output .= "<div class='error'>Database query failed.  Please contact the webmaster.</div>";
		}

	} else { 
		// $missing is not empty 
		$output = "<div class='error'><p>The following required fields are missing in your form submission.  Please check your form again and fill them out.  <br>Thank you.<br>\n<ul>\n";
		foreach($missing as $m){
			$output .= "<li>{$label[$m]}\n";
		}
		$output .= "</ul></div>\n";
	}

} else {
	$output = "<div class='error'>Please begin your student registration from the <a href='studentList.php'>admin page</a>.</div>";
}


?>

<main class='flexboxContainer'>
    
    <div>   
        <?= $output ?>
    </div>

</main>


</body>
</html>