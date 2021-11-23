<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','Soccer');

// get the post records
$txtEventID = $_POST['txteventid'];
$txtMatchID = $_POST['txtmatchid'];
$txtPlayerID= $_POST['txtplayerid'];

// database insert SQL code
$sql = "INSERT INTO `EVENT` (`ID`, `fldeventid`, `fldmatchid`, `fldplayerid`) VALUES ('0', '$txteventid', '$txtmatchid', '$txtplayerid')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>