<html>
<body>
<table>
<tr>
<th>ID</th>
<th>Professional</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Surname</th>
<th>Birth Date</th>
<th>Height</th>
<th>Weight</th>
<th>Current Team</th>
<th>Previous Team</th>
<th>Experience</th>
<th>Salary</th>
<th>Start Date</th>
<th>End Date</th>
<th>Binding Conditions</th>
<th>Occupation</th>
<th>Institution</th>
<th>Hobbies</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "Soccer";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM PLAYERPA;";

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["professional"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["middle_name"] . 
	"</td><td>" . $row["surname"] . "</td><td>" . $row["birth_date"] .
	"</td><td>" . $row["height"] . "</td><td>" . $row["weight"] . 
	"</td><td>" . $row["current_team"] . "</td><td>" . $row["previous_team"] . 
	"</td><td>" . $row["experience"] . "</td><td>" . $row["salary"] . 
	"</td><td>" . $row["start_date"] . "</td><td>" . $row["end_date"] . 
	"</td><td>" . $row["binding_conditions"] . "</td><td>" . $row["occupation"] . 
	"</td><td>" . $row["institution"] . "</td><td>" . $row["hobbies"] . "</td></tr>";}

mysqli_close($db);
?>

</body>
</html>