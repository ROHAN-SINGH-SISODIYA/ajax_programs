<?php

$con = mysqli_connect("118.185.43.122", "0187cs161025", "aashi@32843",'0187cs161025');


$nameid=$_POST['datapost'];

$q= " SELECT * FROM `update1` WHERE mid='$nameid'";

$result = mysqli_query($con, $q);

while($rows = mysqli_fetch_array($result))
{
	?>
	<option><?php echo $rows['Student_name'];?></option>
	<?php

}

?>