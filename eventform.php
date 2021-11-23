<html>
<body>
<table>
<tr>
<th>Event Type ID</th>
<th>Match ID</th>
<th>Player ID</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "Soccer";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$EventTypeID = $_POST['EventTypeID'];
$MatchID = $_POST['MatchID'];
$PlayerID = $_POST['PlayerID'];

$sql = "CREATE TABLE EVENTS (

ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
EventTypeID INT(30) FOREIGN KEY REFERENCES EVENTTYPE (ID),
MatchID INT(30) FOREIGN KEY REFERENCES MATCHES (ID),
PlayerID INT(30) FOREIGN KEY REFERENCES PLAYER (ID),
)";


$conn->close();
?>

 <form name="form1" method="post" action="mark.php" enctype="multipart/form-data">
  <table width="80%" border="0" cellpadding="3" cellspacing="3">
   <tr>
    <td>ID</td>
      <td><input type="text" name="id" id="id"></td>
   </tr>
   <tr>
    <td>Event Type ID</td>
     <td><input type="int" name="MyGuests" id="MyGuests"></td>
   </tr>
   <tr>
    <td>Match ID</td>
    <td><input type="int" name="firstname" id="firstname"></td>
  </tr>
  <tr>
   <td>Player ID</td>
   <td><input type="int" name="lastname" id="lastname"></td>
 </tr>
 <tr>
   <td>&nbsp;</td>
   <td><input type="submit" name="Submit" id="Submit" value="Save Table">
   </td>
</tr>
</table>
</form>