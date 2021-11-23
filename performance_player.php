<html>
<body>
<table>
<tr>
<th>Attempts</th>
<th>Attempts Target</th>
<th>Successful Passes</th>
<th>Failed Passes</th>
<th>Yellow Cards</th>
<th>Red Cards</th>
<th>Fouls</th>
<th>Active/Substitute</th>
<th>Player ID</th>
<th>Goals Made</th>
<th>Goals Conceded</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "Soccer";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM PERFORMANCE_PLAYER;";

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["Attempts"] . "</td><td>" . $row["Attempts Target"] . "</td><td>" . $row["Successful Passes"] . 
	"</td><td>" . $row["Failed Passes"] . "</td><td>" . $row["Yellow Cards"] .
	"</td><td>" . $row["Red Cards"] . "</td><td>" . $row["Fouls"] . 
	"</td><td>" . $row["Active/Substitute"] . "</td><td>" . $row["Player ID"] . 
	"</td><td>" . $row["Goals Made"] . "</td><td>" . $row["Goals Conceded"] . "</td></tr>";}

mysqli_close($db);
?>

</body>
</html>