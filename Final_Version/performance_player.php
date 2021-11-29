<html>
<body>
<table>
<tr>
<th>ID</th>
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
	echo "<tr><td>" . $row["ID"] . "</td><td>" . "<tr><td>" . $row["attempts"] . "</td><td>" . $row["attempts_target"] . "</td><td>" . $row["successful_passes"] . 
	"</td><td>" . $row["fail_passes"] . "</td><td>" . $row["yellow_cards"] .
	"</td><td>" . $row["red_cards"] . "</td><td>" . $row["fouls"] . 
	"</td><td>" . $row["active_or_substitute"] . "</td><td>" . $row["player_id"] . 
	"</td><td>" . $row["goals_made"] . "</td><td>" . $row["goals_conceded"] . "</td></tr>";}

mysqli_close($db);
?>

</body>
</html>