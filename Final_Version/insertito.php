<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Soccer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO PLAYERPA (professional,first_name,middle_name,surname,birth_date,height,weight,current_team,previous_team,experience,salary,start_date,end_date,binding_conditions,occupation,institution,hobbies)
     VALUES ('$professional','$first_name','$middle_name','$surname','$birth_date','$height','$weight','$current_team','$previous_team','$experience','$salary','$start_date','$end_date','$binding_conditions','$occupation','$institution','$hobbies')";

if ($conn->query($sql) === TRUE) {
header('location: indexforcoach.php');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

