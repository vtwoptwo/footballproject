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

$sql = "SELECT * FROM POSITION;";

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["current_position"] . "</td><td>" . $row["previous_position"] . 
	"</td><td>" . $row["starting_date"] . "</td><td>" . $row["end_date"] ."</td></tr>";}

mysqli_close($db);
?>

</body>
</html>