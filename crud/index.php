<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>
</head>
<body>
     <div class="container" style="background-color:powderblue;  margin-right:80px;margin-left: 80px;margin-top: 10px; border: 1px solid powderblue;">
          <h1 class="text-primary text-center" style="text-decoration: underline;">Management System Of Student Information</h1>  
     </div>

     <div class="container" style=" margin-right:80px;margin-left: 80px;margin-top: 10px; border: 1px solid powderblue;padding: 10px;">
     	<h2 class="text-danger text-center" style="margin-top: 0px;">Your all Records</h2>
      <div class="container text-center" style="float: right;padding: 20px;">
          <button  type="button" class="btn btn-info btn-md" id="button01">Update</button>
                                        


          <button  type="button" class="btn btn-info btn-md button02">Insert data</button>
          <button  type="button" class="btn btn-info btn-md button03">Display</button>
          <button  type="button" class="btn btn-info btn-md button04">Delete</button>
          <button  type="button" class="btn btn-info btn-md button05">Select</button>
          <button  type="button" class="btn btn-info btn-md">
            <select>
              <option>Add coloum</option>
              <option>modify data type</option>
              <option>drop row</option>
            </select>
          </button>
          <button  type="button" class="btn btn-warning btn-md"  data-toggle="modal" data-target="#myModal">Create New Table</button>
      </div>
     
          
          <div id="Records"></div>

          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update</h4>
                 </div>
                 <div class="modal-body">
                      <form>
                             <div class="form-group">
                                  <label for="name">Full Name:</label>
                                  <input type="text" class="form-control" id="name" placeholder="type fullname">
                             </div>
                              <div class="form-group">
                                  <label for="address">Address:</label>
                                  <input type="text" class="form-control" id="address" placeholder="type Address">
                             </div>
                              <div class="form-group">
                                  <label for="branch">Branch:</label>
                                  <select class="form-control" id="branch">
                                  	<option>CSE</option>
                                  	<option>ME</option>
                                  	<option>CIVIL</option>
                                  	<option>EC</option>
                                  	<option>IT</option>
                                  </select>
                             </div>
                              <div class="form-group">
                                  <label for="email">Email Id:</label>
                                  <input type="text" class="form-control" id="email" placeholder="type your email id">
                             </div>
                             <div class="form-group">
                                  <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="write password">
                             </div>
                             <div class="checkbox">
                                  <label><input type="checkbox"> Remember me</label>
                             </div>
                        <button type="submit" class="btn btn-warning" onclick="addrecord()">Submit</button>       
                      </form>
                 </div>
                 <div class="modal-footer">
                 	 
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 </div>
               </div>
           </div>
        </div>
     </div>    
      
     <div class="container">
      <div class="row">
        <div class="col-sm-6">
               <!--First button for update-->
           <div id="button1" style="display: none;">
                                            <h2 class="text-primary">Update Information Here</h2>
                                            <form method="post" action="#"  style="margin-top: 20px;">
                                              Table Name: <select class="form-control" onchange="myfun(this.value)">
                                                     <option>Select Table</option>
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
                                                Student Name:<select class="form-control dataget">
                                                      <option>Choose Student</option>
                                                             </select>        
                                                       <br>
                                                       <br>
                                                <button class="btn btn-danger">Update</button>             
                                            </form>
                                          </div>  

         <!-- End First button for update-->


         <!--third button for display data-->
           <div class="button3" style="display: none;">
                                            <h2 class="text-primary">Display Information Here</h2>
                                            <form method="post" action="#"  style="margin-top: 20px;">
                                              Table Name: <select class="form-control" onchange="myfun(this.value)">
                                                     <option>Select Table</option>
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
                                                Student Name:<select class="form-control dataget">
                                                      <option>Choose Student</option>
                                                             </select>        
                                                       <br>
                                                       <br>
                                                <button class="btn btn-danger">Display</button>             
                                            </form>
                                          </div>  

         <!-- End third button for display data-->

         <!--fifth button for select data-->
           <div class="button5" style="display: none;">
                                            <h2 class="text-primary">select Information Here</h2>
                                            <form method="post" action="#"  style="margin-top: 20px;">
                                              Table Name: <select class="form-control" onchange="myfun(this.value)">
                                                     <option>Select Table</option>
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
                                                Student Name:<select class="form-control dataget">
                                                      <option>Choose Student</option>
                                                             </select>        
                                                       <br>
                                                       <br>
                                                <button class="btn btn-danger">Select</button>             
                                            </form>
                                          </div>  

         <!-- fifth button for select data-->
        </div>
        <div class="col-sm-6">
           <!--second button for insert data-->
           <div class="button2" style="display: none;">
                                           <h2 class="text-primary">Insert Information Here</h2>
                                            <form method="post" action="#"  style="margin-top: 20px;">
                                              Table Name: <select class="form-control" onchange="myfun(this.value)">
                                                     <option>Select Table</option>
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
                                                Student Name:<select class="form-control dataget">
                                                      <option>Choose Student</option>
                                                             </select>        
                                                       <br>
                                                       <br>
                                                <button class="btn btn-danger">Insert</button>             
                                            </form>
                                          </div>  

         <!-- second button for insert data-->

          <!--fourth button for delete data-->
           <div class="button4" style="display: none;">
                                           <h2 class="text-primary">Delete Information Here</h2>
                                            <form method="post" action="#"  style="margin-top: 20px;">
                                              Table Name: <select class="form-control" onchange="myfun(this.value)">
                                                     <option>Select Table</option>
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
                                                Student Name:<select class="form-control dataget">
                                                      <option>Choose Student</option>
                                                             </select>        
                                                       <br>
                                                       <br>
                                                <button class="btn btn-danger">Delete</button>             
                                            </form>
                                          </div>  

         <!-- fourth button for delete data-->
        </div>
      </div>
     </div>   
    
        
      


    

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>