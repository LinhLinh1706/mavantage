<?php
// acquire shared info from other files
include("dbConnect.php"); // database connection 
// make database connection
$conn = dbConnect();
?>
<?php
// Retrieve the product & category info
	$sql = "SELECT Events.eventID, Events.URL, Events.event, Events.date, Events.location, EventCategory.Name FROM Events, EventCategory where Events.categoryID = EventCategory.categoryID ORDER BY Events.event";

	$stmt = $conn->stmt_init();

	if ($stmt->prepare($sql)){

		$stmt->execute();
		$stmt->bind_result($eID, $URL, $event, $date, $location, $Name);
	
		$tblRows = "";
		while($stmt->fetch()){
            $Title_js = str_replace('"', "", $event); // replace double quotes by the single quote in the title to avoid trouble in the javascript function.
			$Title_js = htmlspecialchars($Title_js, ENT_QUOTES); // convert quotation marks in the product title to html entity code.  This way, the quotation marks won't cause trouble in the javascript function call ( href='javascript:confirmDel ...' ) below.  

			$tblRows = $tblRows."<tr><td><a href='$URL'>$event</a></td>
								<td>$Name</td>
                                <td>$date</td>
                                <td>$location</td>
                                <td><a href='form.php?eid=$eID'>Sign Up</a></td></tr>";
		}
		
		$output = "
        <table class='itemList'>\n
		<tr><th>Event</th><th>Category</th><th>Date</th><th>Location</th><th>Option</th></tr>\n".$tblRows.
		"</table>\n";
					
		$stmt->close();
	} else {

		$output = "Query to retrieve product information failed.";
	
	}

	$conn->close();
?>