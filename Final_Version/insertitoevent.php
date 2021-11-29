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

$sql = "INSERT INTO EVENTLIST (penalty_shootouts ,yellow_card ,red_card ,fouls ,goals_made ,goals_conceded ,successful_passes ,fail_passes )
     VALUES ('$penalty_shootouts','$yellow_card','$red_card','$fouls','$goals_made','$goals_conceded','$successful_passes','$fail_passes')";

if ($conn->query($sql) === TRUE) {
header('location: indexforcoach.php');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>