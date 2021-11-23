<html>
<body>
<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Ranking</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "Soccer";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM TEAM;";

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Ranking"] ."</td></tr>";}

mysqli_close($db);
?>

</body>
</html>