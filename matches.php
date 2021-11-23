<html>
<body>
<table>
<tr>
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
	echo "<tr><td>" . $row["Score"] . "</td><td>" . $row["Place"] . "</td><td>" . $row["Date"] . 
	"</td><td>" . $row["Extra Time"] . "</td><td>" . $row["Penalty Shootouts"] .
	"</td><td>" . $row["Results"] . "</td><td>" . $row["Timings"] . "</td></tr>";}

mysqli_close($db);
?>

</body>
</html>
