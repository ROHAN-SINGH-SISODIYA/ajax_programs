<?php


$con = mysqli_connect("118.185.43.122", "0187cs161025", "aashi@32843",'0187cs161025');

extract($_POST);
if(isset($_POST['Submit']))
{ 
$name = $_POST['name'];
$branch = $_POST['select'];
$rollno = $_POST['rollno'];
$number = $_POST['num'];

//$sql="INSERT INTO `update`(`Id`, `Student_name`, `branch`, `Enrollment_no`, `mid`) VALUES ('','$name','$branch','$rollno','$number')";
$sql="insert into `update1`(`Id`, `Student_name`, `branch`,'Enrollment_no','mid') values('','$name','$branch','$rollno','$number')";
$query=mysqli_query($con,$sql);
echo "Successfully Inserted";
//header("location:index.php");
}
else
{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

mysqli_close($con);
?>