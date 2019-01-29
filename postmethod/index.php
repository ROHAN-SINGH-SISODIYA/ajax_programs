<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
  <div class="container">
  	<h1 id="changehere">going to be change</h1>
    <form>
      fullname:<input type="text" class="form-control" name="fullname" id="fullname">
       username:<input type="text" class="form-control" name="username" id="username">
    </form>
  	<button class="btn btn-primary btnclick">click here</button>
  </div>
  <script>
  	$(document).ready(function(){
  	   $('.btnclick').click(function(){
        $.post('post.php',{
          name:"rohan",
          subs:"subsrcibe"
        },function(data,status){
          $('#changehere').html(data);
            alert(status);
            
         });
       });	
  	});
  </script>
</body>
</html>