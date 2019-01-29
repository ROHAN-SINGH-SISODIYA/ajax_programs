<?php
session_start();
header("location:index1.php");
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'managementsystem');


$username=$_POST['username'];
$password=$_POST['password'];

$login= " SELECT * FROM `signup` WHERE username='$username' && password='$password'";

$result = mysqli_query($con, $login);
$num=mysqli_num_rows($result);
if($num==1)
{   
    $qy="INSERT INTO `login`(`id`, `username`, `password`) VALUES('','$username','$password')";
    mysqli_query($con, $qy);
	
}
else
{
  echo "duplicate data";
}
?>