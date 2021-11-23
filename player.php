<html>
<body>
<table>
<tr>
<th>First Name</th>
<th>Middle Name</th>
<th>Surname</th>
<th>Birth Date</th>
<th>Height</th>
<th>Weight</th>
<th>Current Team</th>
<th>Previous Team</th>
<th>Experience</th>
<th>Professional/Amateur</th>
<th>Salary</th>
<th>Start Date</th>
<th>End Date</th>
<th>Binding Conditions</th>
<th>Occupation</th>
<th>Institution</th>
<th>Hobbies</th>
<th>Player ID</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "Soccer";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM PLAYER;";

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["First Name"] . "</td><td>" . $row["Middle Name"] . "</td><td>" . $row["Surname"] . 
	"</td><td>" . $row["Birth Date"] . "</td><td>" . $row["Height"] .
	"</td><td>" . $row["Weight"] . "</td><td>" . $row["Current Team"] . 
	"</td><td>" . $row["Previous Team"] . "</td><td>" . $row["Experience"] . 
	"</td><td>" . $row["Professional/Amateur"] . "</td><td>" . $row["Salary"] . 
	"</td><td>" . $row["Start Date"] . "</td><td>" . $row["End Date"] . 
	"</td><td>" . $row["Binding Conditions"] . "</td><td>" . $row["Occupation"] . 
	"</td><td>" . $row["Institution"] . "</td><td>" . $row["Hobbies"] . 
	"</td><td>" . $row["Player ID"] . "</td></tr>";}

mysqli_close($db);
?>

</body>
</html>