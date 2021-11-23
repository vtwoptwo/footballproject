<?php


$con = mysqli_connect("localhost","root","","Soccer");
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$username = $_POST['username'];
$password = $_POST['password'];
if($username !=''&& $password !='')
{
//  To redirect form on a particular page

header("Location: tableslist.php")

}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>