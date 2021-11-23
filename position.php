<html>
<body>
<table>
<tr>
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
	echo "<tr><td>" . $row["Current Position"] . "</td><td>" . $row["Previous Position"] . 
	"</td><td>" . $row["Start Date"] . "</td><td>" . $row["End Date"] ."</td></tr>";}

mysqli_close($db);
?>

</body>
</html>