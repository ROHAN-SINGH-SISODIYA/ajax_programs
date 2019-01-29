<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'managementsystem');

$fullname=$_POST['fullname'];
$address=$_POST['Address'];
$mobileno=$_POST['mobileno'];
$username=$_POST['username'];
$password=$_POST['password'];

$login= "INSERT INTO `signup`(`fullname`, `address`, `mobileno`, `username`, `password`) VALUES ('$fullname','$address','$mobileno','$username','$password')";

mysqli_query($con,$login);
header("location:index1.php");

?>