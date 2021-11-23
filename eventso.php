<form action="chooseevent.php" method="post">
<table>
<tr><td>Event Type ID</td><td> <input type="text" name="eventtypeid"/></td></tr>
<tr><td>Player ID</td><td> <input type="text" name="playerid"/></td></tr>
<tr><td>Match ID</td><td> <input type="text" name="matchid"/></td></tr>
<tr><td colspan="2"><input type="submit" value="Search"/> </td></tr>
</table> 

<?php
echo "Welcome to the events database, please enter the event ID, player ID, and Match ID you are looking for";
$eventtypeid=$_POST["eventtypeid"];//receiving name field value in $name variable
$playerid=$_POST["playerid"];//receiving password field value in $password variable
$matchid=$_POST["matchid"];



$con = mysqli_connect("localhost","root","","Soccer");
$txtEventTypeID = $_POST['txtEventTypeID'];
$txtPlayerID = $_POST['txtPlayerID'];
$txtMatchID = $_POST['txtMatchID'];

// database insert SQL code
$sql = "INSERT INTO `EVENT` (`Event Type ID`, `Player ID`, `Match ID`) VALUES ('123', '456', '789')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
