<!DOCTYPE html>
<html>
<head>
  <title>project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
  <script src="jquery-ui/external/jquery/jquery.js"></script>
  <script src="jquery-ui/jquery-ui.js"></script>
  <script>
    $(document).ready(function(){
      $("#Signup").click(function(){
          $("#form1").hide(10,function(){
            $("#form2").slideDown();
        });
      });
    });
  </script>
  <style type="text/css">
      body
  {
    margin: 0px;
    padding: 0px;
  }

  .row.content 
  {
    height: 600px
  }

    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    footer {
      background-color:#337ab7;
      color:black;
      padding: 25px;
    }
    @media screen and (max-width: 767px) {
      .sidenav 
      {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }  }
     
      @media screen and (max-width: 300px) 
      {
         #h11{font-size: 10px;}
      }
  </style>
</head>
<body>

    <div class="container-fluid" style="height:80px; background-color:#337ab7;">
      <div class="row">
       <div class="col-lg-8">
           <h1 class="text-center h11"  style="color: powderblue;float: right;">Student Management System</h1>
       </div>
       <div class="col-lg-4">
          <button class="btn btn-success" id="Signup" style="float:right;margin-top: 20px;">SignUp</button>
       </div>
     </div>
    </div>



<div class="container">
  <div class="row content">
    <div class="col-sm-3 sidenav">

  
        
        <h1>rohan rajput</h1>


</div>

  

     <div class="col-lg-9">
           <div class="container" id="form1">
            <br>
            <div class="col-lg-5" style="margin-top: 30px; margin-left:20px;padding: 40px; border-radius:20%;border:1px solid powderblue;" >
              <h1 class="text-info">Login Here</h1>
              <br>
                <form id="myform" method="post" action="validation.php">
                   <div class="form-group">
                      <label>Username:</label>
                       <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
                    </div>
                    
                    <div class="form-group">
                      <label>Password:</label>
                       <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <button class="btn btn-info" name="submit">Login</button>
                    <br>
                    <br>
                    <br>
                    <p class="text-center">Do not have an account<a href="#" id="#">Signup</a></p>

                </form>
             </div>
         </div>  

         <div class="container-fluid" id="form2" style="display: none;margin-right: 200px;border:1px solid powderblue;margin-top: 10px;">
            <h1 class="text-info">Sign Up Here</h1>
              <br>
                <form id="myform" method="post" action="Signup.php">
                   <div class="form-group">
                      <label>Fullname:</label>
                       <input type="text" name="fullname" class="form-control" placeholder="Enter Your fullname">
                    </div>
                     <div class="form-group">
                      <label>Address:</label>
                       <input type="text" name="Address" class="form-control" placeholder="Enter Your Address">
                    </div>
                   <div class="form-group">
                      <label>Mobile no:</label>
                       <input type="text" name="mobileno" class="form-control" placeholder="Enter Your mobile number">
                    </div>
                     <div class="form-group">
                      <label>Username:</label>
                       <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
                    </div>
                    <div class="form-group">
                      <label>Password:</label>
                       <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <button class="btn btn-info" name="submit">Signup</button>
                    <button class="btn btn-info">Login</button>
                    <br>
                    <br>
                    <br>
                   

                </form>
          </div>          
      </div>
   </div>
</div>



<footer class="container-fluid">
  <p class="text-center">Copyright@2018</p>
</footer>

</body>
</html>
