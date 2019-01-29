<!DOCTYPE html>
<html>
<head>
	<title>Dynamic program ajax</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="jQuery.js"></script>
</head>
<body>
    <div class="container">
    	<button class="btn btn-success" id="click1">Click Here to Change the page</button>
    	<div class="container" id="loaddata">
    		<h2>Vertical form</h2>
               <form action="/action_page.php">
                     <div class="form-group">
                           <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                     </div>
                     <div class="form-group">
                           <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                     </div>
                     <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me</label>
                     </div>
                     <button type="submit" class="btn btn-default">Submit</button>
               </form>
        </div>
    </div>
</body>
</html>