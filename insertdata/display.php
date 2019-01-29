<?php
$con = mysqli_connect('118.185.43.122', '0187cs161025', 'sistec');
mysqli_select_db($con,'0187cs161025');

$q= " SELECT * FROM `insert1`";

$query=mysqli_query($con,$q);

if(mysqli_num_rows($query)>0)
{
    while($result=mysqli_fetch_array($query))
    {
        ?>
         
        <tr>
            <td><?php echo $result['id']; ?></td>
             <td><?php echo $result['username']; ?></td>
             <td><?php echo $result['password']; ?></td>
        </tr>
        <?php
    }
}
       
?>