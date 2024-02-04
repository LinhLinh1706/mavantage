<?php
// acquire shared info from other files
include("dbConnect.php"); // database connection 
include("shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

// make database connection
$conn = dbConnect();

$ID = "";
$code = "";
$errMsg = "";

if (isset($_GET['did'])) { 

	$ID = intval($_GET['did']); 

	if ($ID > 0){
			
		//compose a select query
		$sql = "SELECT code from EventStudent WHERE ID = ?"; // note that the spelling "PID" is based on the field name in my product table (database).
			
		$stmt = $conn->stmt_init();

		if($stmt->prepare($sql)){
			$stmt->bind_param('i', $ID);
			$stmt->execute();
				
			$stmt->bind_result($code); // bind the five pieces of information necessary for the form.
			
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
?>
<HTML>
    <?php echo $HTMLHeader; ?>
<BODY>
    <?php echo $nav; ?>
<main class='flexboxContainer'>
    <div class="flexboxContainer">
    <form action="delete.php" method="POST" class="form">
        <input type="hidden" name="ID" value="<?=$ID?>">
        <div class="form-group row ">
            <label for="code" class="col-sm-12 col-form-label">Code*:</label>
                <div class="col-sm-12">
                    <input type="text" name="code" id="code" class="form-control" maxlength="4">
                    <input class="submit" type="submit" name="Submit" value="Submit Code">
                </div>
        </div>
    </form>
    </div>
</main>

<?php echo $footer; ?>

</body>
</html>