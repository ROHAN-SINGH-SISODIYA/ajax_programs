<?php

$con = mysqli_connect("118.185.43.122", "0187cs161025", "aashi@32843",'0187cs161025');
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    body{margin:5px;margin-top: 50px; border:2px solid black;padding: 20px; }
       div.vertical-line{
      width: 0px;
      height: 100%;
      float: left; 
      border: 1px inset;
    }
    </style>

    <script>
      $(document).ready(function(){
        $('#click01').click(function(){
          $('#show1').slideToggle(1000);
        });
      });
    </script>
</head>
<body>
  <div class="container">
   <div class="row">
     <div class="col-sm-5">
      <button class="btn btn-info">See Student Information</button>
      <form method="post" action="#"  style="margin-top: 20px;">
          Brance: <select class="form-control" onchange="myfun(this.value)">
                    <option>Select Branch</option>
                    <?php
                    $q="select *from branches";
                    $result=mysqli_query($con,$q);
                    while($rows=mysqli_fetch_array($result))
                    {
                      ?>
                         <option value="<?php echo $rows['mid'];?>"><?php echo $rows['branch'];?></option>
                      <?php
                    }
                    ?>
                  </select>
                  <br>
          Student name:<select class="form-control dataget">
                            <option>Choose Student</option>
                       </select>        
                       <br>
                       <br>
          <button class="btn btn-primary">Submit</button>             
      </form>
       
     </div>
       <div class="col-sm-1">
         <div class="vertical-line" style="height: 500px;"></div>
       </div> 
       

       <div class="col-sm-5">
        <center><button class="btn btn-primary" id="click01">Click Here to Update student Infromation</button></center>
         <div class="container" id="show1" style="display: none;">
          <h2>Update Here</h2>
             <form method="post" action="index.php">
                Fullname:<input type="text" name="name">
                <br>
                <hr>
                 Select Branch:<select name="select">
                                <option>Select Branch</option>
                                <option>CSE</option>
                                <option>ME</option>
                                <option>EC</option>
                                <option>CIVIl</option>
                               </select>
                <br>
                <hr>
                Enrollment No.:<input type="text" name="rollno" >
                <br>
                <hr>
                 select branch number:<input type="number" name="num">
                <br>
                <hr>
                <button class="btn btn-info" name="Submit">UPDATE</button>
             </form>
         </div>
      </div>
        <div class="col-sm-1"></div>
   </div>
</div>   




<script type="text/javascript">
  function myfun(datavalue)
  {    
    $.ajax({
        type:"POST",
        url:"class.php",
        
        data:{datapost:datavalue},
      
       success:function(result)
        {
           $('.dataget').html(result);
        }

    });
  }
</script>
    

</body>
</html>