<html>
<body>
<table>
<tr>
<th>ID</th>
<th>Score</th>
<th>Place</th>
<th>Date</th>
<th>Extra Time</th>
<th>Penalty Shootouts</th>
<th>Results</th>
<th>Timings</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "Soccer";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM MATCHES;";

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["score"] . "</td><td>" . $row["place"] . "</td><td>" . $row["date"] . 
	"</td><td>" . $row["extra_time"] . "</td><td>" . $row["penalty_shootouts"] .
	"</td><td>" . $row["win_lose_draw"] . "</td><td>" . $row["timings"] . "</td></tr>";}

mysqli_close($db);
?>

</body>
</html>
