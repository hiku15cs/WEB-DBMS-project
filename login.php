<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="login.css"> 
    <link href="bootstrap.min.css" rel="styleheet" type="text/css">
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
    <br><br><br><br><br><br><br><br><br><br><br>
        <b id="login-Name">LOGIN HERE</b>
        <div class="row">
        <div class="col-md-10 col-md-offset-6" id="login">
            
          <form method="POST" action="process1.php">  
            <div class="form-group">
              <label class="user">Username</label>
              <div class="input-group">
                <span class="input-group-addon" id="user"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" name="user" placeholder="Enter username">
                </div>
               </div>
              
                <div class="form-group">
              <label class="user">Password</label>
              <div class="input-group">
                <span class="input-group-addon" id="pass"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Enter Password">
                  <br>
                  <input type="checkbox" color:"white" value="Remember me">
                </div>
               </div>
            
              
            <div class="form-group">
                <br>
              <input type="submit" class="btn btn-sucess" name="login" value="Login">
              <input type="reset" class="btn btn-danger" value="Reset">
              </div>
            <br><br><br>
              <a href="https://www.google.com" style="color: aliceblue; font-size: 15px; float:right;">Forget Password</a>
              
            </form>          
            
            </div>
        </div>
    </div>
    
    </body>

</html>