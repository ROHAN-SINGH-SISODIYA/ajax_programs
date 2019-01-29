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
  	<p id="changehere"><h1>going to be change</h1></p>
  	<button class="btn btn-primary btnclick">click here</button>
  </div>
  <script>
  	$(document).ready(function(){
  		$('.btnclick').click(function(){
  			$.get('index1.php',function(data,status){
  				$('#changehere').html(data);
  				
               
  			});
  		});

  	});
  </script>
</body>
</html>