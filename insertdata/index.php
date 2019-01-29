<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" style="background:powderblue;">
            <h1 class="text-center">Insert data in database</h1>
            <br>
            <div class="col-lg-6 m-auto" style="margin-left:300px;">
                <form id="myform" method="post" action="insertdata.php">
                   <div class="form-group">
                      <label>Username:</label>
                       <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
                    </div>
                    
                    <div class="form-group">
                      <label>Password:</label>
                       <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <button class="btn btn-primary" name="submit">Submit</button>
                    <br>
                    <br>
                
                </form>
            </div>
        </div>
        <div class="container"  style="background:#C5CBE5;">
            <br>
               <h1 class="text-center">Show data Here</h1>
            <br>
            <button id="displaydata" class="btn btn-danger">Show Information</button>
            <table class="table table-striped table-bordered">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PASSWORD</th>
                </thead>
                <tbody id="response">
                
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function(){
                var form=$('#myform');
                $('#submit').click(function(){
                    $.ajax({
                        url:form.attr("action"),
                        type:'post',
                        data:$("myform input").serialize(),
                        success:function(data)
                        {
                            console.log(data);
                        }
                    });
                });
           
            
            $('#displaydata').click(function(){
                $.ajax({
                	type:"POST",
                    url : "display.php",
                    success:function(responsedata)
                    {
                        $('#response').html(responsedata);
                    }
                });
            });
        });            
        </script>
    </body>
</html>