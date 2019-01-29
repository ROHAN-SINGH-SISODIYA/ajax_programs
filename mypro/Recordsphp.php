<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'studentrecord');


$firstname = $_POST['firstname'];
$address = $_POST['address'];
$branch = $_POST['branch'];
$email = $_POST['email'];
$pwd = $_POST['password'];


$sql="INSERT INTO `insert`(`id`, `name`, `address`, `branch`, `email`, `password`) VALUES ('','$firstname','$address','$branch','$email','$pwd')";

mysqli_query($con,$sql);

header('location:index.php');    
       
?>