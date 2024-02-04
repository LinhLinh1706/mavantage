<?php
// acquire shared info from other files
include("dbConnect.php"); // database connection 
include("shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

// make database connection
$conn = dbConnect();

$ID = "";

if (isset($_POST['Submit'])) { 
    $required = array("code");
    
    $expected = array("code", "ID"); // again, the spelling of each item should match the form field names
    $label = array ("code" => 'Code', "ID" => 'ID');
    
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
	
    // check if it's a correct code
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
                        $sql = "DELETE from EventStudent WHERE ID = ?";
        				
            			if($stmt->prepare($sql)){
                			$stmt->bind_param('i', $ID);
                			$stmt_prepared = 1;// set up a variable to signal that the query statement is successfully prepared.
                            
            			}
                    } else {
                         $output = "<div class='error'>Wrong code. Try again.</div>";
                    }
            }
                
        }   else {
            // 	error message
            	$output = "<p>If you are expecting to delete an exiting information, there are some error occured in the process -- the information you selected is not recognizable. Please contact the webmaster. Thank you.</p>";
        }
        if ($stmt_prepared == 1){
    
	        if ($stmt->execute()){
		        $output = "<span class='success'>Success!</span><p>The information has been deleted from the database:</p>";
	        } else {
		    //$stmt->execute() failed.
		    $output .= "<div class='error'>Database operation failed.  Please contact the webmaster.</div>";
	        }
        } else {
		    // statement is not successfully prepared (issues with the query).
		    $output .= "<div class='error'>Database query failed.  Please contact the webmaster.</div>";
            }
    } else { 
		// $missing is not empty 
		$output = "<div class='error'><p>The following required fields are missing in your form submission.  Please check your form again and fill them out.  <br>Thank you.<br>\n<ul>\n";
		foreach($missing as $m){
			$output .= "<b>{$label[$m]}\n</b>";
		}
		$output .= "</ul></div>\n";
	}
}   else {
	$output = "<p>To manage student infromation, please follow the <a href='studentList.php'>student list page</a></p> to visit the admin page. Thank you. </p>";
}

?>
<br>
<HTML>
    <?php echo $HTMLHeader; ?>
<BODY>
    <?php echo $nav; ?>
<main>

<main class='flexboxContainer'>
    
    <div>   
        <?= $output ?>
        
        <p>Back to the <a href='studentList.php'>student list page</a></p>
    </div>

</main>

<?php print $footer; ?>

</body>
</html>