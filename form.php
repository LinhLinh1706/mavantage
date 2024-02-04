<?php
// acquire shared info from other files
include("dbConnect.php"); // database connection 
include("shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

// make database connection
$conn = dbConnect();
$code = "";

$errMsg = "";

$eID = "";
if (isset($_GET['eid'])) { 

	$eID = intval($_GET['eid']); 

	if ($eID > 0){
			
		//compose a select query
		$sql = "SELECT event from Events WHERE eventID = ?"; // note that the spelling "PID" is based on the field name in my product table (database).
			
		$stmt = $conn->stmt_init();

		if($stmt->prepare($sql)){
			$stmt->bind_param('i',$eID);
			$stmt->execute();
				
			$stmt->bind_result($event); 
			
			$stmt->store_result();
				
			// proceed only if a match is found -- there should be only one row returned in the result
			if($stmt->num_rows == 1){
				$stmt->fetch();
			} else {
				$errMsg = "<div class='error'>Information on the record you requested is not available.  If it is an error, please contact the webmaster.  Thank you.</div>";
				$eID = ""; // reset $pid
			}

		} else {
			// reset $pid
			$eID = "";
			// compose an error message
			$errMsg = "<div class='error'> If you are expecting to edit an exiting item, there are some error occured in the process -- the selected product is not recognizable.  Please follow the link below to the product adminstration interface or contact the webmaster.  Thank you.</div>";
		}
		
// 		$stmt->close();
	} // close if(is_int($pid))
	
	
}

$ID = "";
$firstName = "";
$lastName = "";
$email = "";
$studentID = "";
$eventID = "";

$errMsg = "";

if (isset($_GET['sid'])) { 

	$ID = intval($_GET['sid']); 

	if ($ID > 0){
			
		//compose a select query
		$sql = "SELECT firstName, lastName, email, studentID, eventID from EventStudent WHERE ID = ?"; // note that the spelling "PID" is based on the field name in my product table (database).
			
		$stmt = $conn->stmt_init();

		if($stmt->prepare($sql)){
			$stmt->bind_param('i',$ID);
			$stmt->execute();
				
			$stmt->bind_result($firstName, $lastName, $email, $studentID, $eventID); // bind the five pieces of information necessary for the form.
			
			$stmt->store_result();
				
			// proceed only if a match is found -- there should be only one row returned in the result
			if($stmt->num_rows == 1){
				$stmt->fetch();
			} else {
				$errMsg = "<div class='error'>Information on the record you requested is not available.  If it is an error, please contact the webmaster.  Thank you.</div>";
				$ID = ""; // reset $pid
			}

		} else {
			// reset $pid
			$ID = "";
			// compose an error message
			$errMsg = "<div class='error'> If you are expecting to edit an exiting item, there are some error occured in the process -- the selected product is not recognizable.  Please follow the link below to the product adminstration interface or contact the webmaster.  Thank you.</div>";
		}
		
// 		$stmt->close();
	} // close if(is_int($pid))
	
	
}
function CategoryOptionList($selectedeventID){
	
	$list = ""; //placeholder for the CD category option list
	
	global $conn;
	// retrieve category info from the database to compose a drop down list
	$sql = "SELECT eventID, event FROM Events";
	
	$stmt = $conn->stmt_init();

	if ($stmt->prepare($sql)){
		
		$stmt->execute();
		$stmt->bind_result($eventID, $event);

		while ($stmt->fetch()) {
			// while going through the rows in the results, check if the category id of the current row matches the parameter ($CID) provided by the function call
			if ($eventID == $selectedeventID){
				$selected = "Selected";
			} else {
				$selected = "";
			}
			// create an option based on the current row
			$list = $list."<option value='$eventID' $selected>$event</option>";
		}
	}
	$stmt->close();
	return $list;
}
?>
<HTML>
    <?php echo $HTMLHeader; ?>
<BODY>
    <?php echo $nav; ?>
<main class='flexboxContainer'>

        <div class='container'>
            <div class='row'>
                <div class='col-sm-12 col-md-12 col-lg-12'>
                    <h1 style="text-align:center;">SIGN-UP FORM</h1>
                        <nav class="flexboxContainer">
                            <div>
                                <div class="buttonBox"><a href="what.php">List of events</a></div>
                                <div class="buttonBox"><a href="studentList.php">Check your information</a></div>
                            </div>
                        </nav>
                        <div class="flexboxContainer">
                        <form action="edit.php" method="POST" class="form">
                        * Required
                            <input type="hidden" name="ID" value="<?=$ID?>">
                            <input type="hidden" name="code" value="<?=$code?>">
                            <div class="form-group row ">
                                <label for="firstName" class="col-sm-12 col-form-label">First Name*:</label>
                                <div class="col-sm-12">
                                    <input type="text" name="firstName" id="firstName" class="form-control" maxlength="30" placeholder="John" value="<?= htmlentities($firstName) ?>">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="lastName" class="col-sm-12 col-form-label">Last Name*:</label>
                                <div class="col-sm-12">
                                    <input type="text" name="lastName" id="lastName" class="form-control" maxlength="30" placeholder="Garcia" value="<?= htmlentities($lastName) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-12 col-form-label">
                                    Email*:</label>
                                <div class="col-sm-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="user@email.com" value="<?= htmlentities($email) ?>">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="studentID" class="col-sm-12 col-form-label">Student ID*:</label>
                                <div class="col-sm-12">
                                    <input type="text" name="studentID" id="studentID" class="form-control" maxlength="10" placeholder="100193021" value="<?= $studentID ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="event" class="col-sm-12 col-form-label">
                                    Event*:</label>
                                <div class="col-sm-12">
                                    <select name="eventID"><?= CategoryOptionList($selectedeventID)?></select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input class="submit" type=submit name="Submit" value="Submit Information">
                                </div>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
</main>

<?php echo $footer; ?>

</body>
</html>