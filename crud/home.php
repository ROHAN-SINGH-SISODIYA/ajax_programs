
<?php
  session_start();
 ?>
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
     
     
  </style>
</head>

<body>

    <div class="container-fluid" style="height:80px; background-color:#337ab7;">
      <div class="row">
       <div class="col-sm-8">
           <h1 class="text-center h11"  style="color: powderblue;float: right;">Student Management System</h1>
       </div>
       <div class="col-sm-4">
          
       </div>
     </div>
    </div>




<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
       <div class="container-fluid">
         <h2 class="text-center"> welcome <?php echo $SESSION['username']; ?></h2>
         <br>
         <a href="logout.php">LOGOUT</a>
       </div>


    </div>

  

     <div class="col-sm-9">
          
   </div>
</div>



<footer class="container-fluid">
  <p class="text-center">Copyright@2018</p>
</footer>

</body>
</html>
