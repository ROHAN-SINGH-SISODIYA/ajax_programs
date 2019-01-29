<?php
//$con = mysqli_connect("localhost", "root", "");
//$cd=mysqli_select_db($con,"insertdata

$con = mysqli_connect('118.185.43.122', '0187cs161025', 'sistec');
$cd = mysqli_select_db($con,'0187cs161025');


extract($_POST);


if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
echo "sucess2";
$sql="insert into `insert1`(`name`, `password`) values('$username','$password')";

$query=mysqli_query($con,$sql);
echo "<h1>submitted</h1>";
}
header('location:index.php');    
       
?>