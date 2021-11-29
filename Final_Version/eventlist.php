<html>
<body>
<table>
<tr>
<th>ID</th>
<th>Current Position</th>
<th>Previous Position</th>
<th>Starting Date</th>
<th>End Date</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "Soccer";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM EVENTLIST;";

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["penalty_shootouts"] . "</td><td>" . $row["yellow_card"] . 
	"</td><td>" . $row["red_card"] . "</td><td>" . $row["fouls"] .
	"</td><td>" . $row["goals_made"] . "</td><td>" . $row["goals_conceded"] . 
	"</td><td>" . $row["successful_passes"] . "</td><td>" . $row["fail_passes"] . "</td></tr>";}

mysqli_close($db);
?>

</body>
</html>