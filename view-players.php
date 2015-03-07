<?php include "nav.php";?>
<h2>These are the registered players</h2>
<?php
// This script retrieves all the records from the users table.
require 'mysqli-connect.php'; // Connect to the database.
// Make the query:
$q = "SELECT CONCAT(lname, ', ', fname) AS name, DATE_FORMAT(registration_date, '%M %d, %Y') AS regdat FROM users ORDER BY registration_date ASC";
$result = @mysqli_query($dbcon, $q); // Run the query.
if ($result) {
	// If it ran OK, display the records.
	// Table header.
	echo '<table>
<tr><td><b>Name</b></td><td><b>Date Registered</b></td></tr>';
// Fetch and print all the records:
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		echo '<tr><td>' . $row['name'] . '</td><td>' . $row['regdat'] . '</td></tr>';
	}
	echo '</table>'; // Close the table.
	mysqli_free_result($result); // Free up the resources.
} else {
	// If it did not run OK.
	// Public message:
	echo '<p class="alert-box alert round">The current users could not be retrieved. We apologize for any inconvenience.</p>';
	// Debugging message:
	echo '<p>' . mysqli_error($dbcon) . '<br><br />Query: ' . $q . '</p>';
}// End of if ($r) IF.
mysqli_close($dbcon); // Close the database connection.
?>
