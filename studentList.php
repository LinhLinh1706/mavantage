<?php
// acquire shared info from other files
include("dbConnect.php"); // database connection 

// make database connection
$conn = dbConnect();

?>
<?php
	include ('shared.php');
?>
<HTML>
    <?php echo $HTMLHeader; ?>
<BODY>
    <?php echo $nav; ?>
<main>
    <script>
    function confirmDel(lastName, ID) {
    // javascript function to ask for deletion confirmation
    
    	url = "delete.php?sid="+ ID;
    	var agree = confirm("Delete this student: <" + lastName + "> ? ");
    	if (agree) {
    		// redirect to the deletion script
    		location.href = url;
    	}
    	else {
    		// do nothing
    		return;
    	}
    }
    </script>
    
    
    <?php
    	$sql = "SELECT EventStudent.ID, EventStudent.firstName, EventStudent.lastName, EventStudent.email, EventStudent.studentID, Events.event, Events.date, Events.location FROM EventStudent, Events WHERE Events.eventID = EventStudent.eventID order by Events.event";
    
    	$stmt = $conn->stmt_init();
    
    	if ($stmt->prepare($sql)){
    
    		$stmt->execute();
    		$stmt->bind_result($ID, $firstName, $lastName, $email, $studentID, $event, $date, $location);
    	    

    		$tblRows = "";
    		while($stmt->fetch()){
                $Title_js = str_replace('"', "", $lastName); // replace double quotes by the single quote in the title to avoid trouble in the javascript function.
    			$Title_js = htmlspecialchars($Title_js, ENT_QUOTES);
    
    			$tblRows = $tblRows."<tr><td>$firstName</td>
    			                     <td>$lastName</td>
    								 <td>$email</td>
    								 <td>$studentID</td>
    								 <td>$event</td>
    								 <td>$date</td>
    								 <td>$location</td>
    							     <td><a href='edit_form.php?sid=$ID'>Edit</a> | <a href='codeSubmit.php?did=$ID'>Delete</a></td></tr>";
    		}
    		
    		$output = "
            <table class='itemList'>\n
    		<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Student ID</th><th>Event</th><th>Date</th><th>Location</th><th>Option</th></tr>\n".$tblRows.
    		"</table>\n";
    					
    		$stmt->close();
    	} else {
    
    		$output = "Query to retrieve product information failed.";
    	
    	}
    
    	$conn->close();
    ?>
    <div class='flexboxContainer'>
        <div>
            <h1 class='ghost-header-title2'>Students Information List</h1>
                <nav class="flexboxContainer">
                    <div>
                    <div class="buttonBox"><a href="form.php">Sign-up for an event</a></div>
                    <div class="buttonBox"><a href="studentList.php">Check your information</a></div>
                    </div>
                </nav>
            <?php echo $output ?>
        </div>
    </div>
</main>

<?php print $footer; ?>

</body>
</html>