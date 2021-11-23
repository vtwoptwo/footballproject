<html>
<body>
<table>
<tr>
<th>Administration Position</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "Soccer";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM ADMINISTRATION;";

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["Administration Position"] ."</td></tr>";}

mysqli_close($db);
?>

</body>
</html>