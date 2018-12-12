<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <b id="login-Name">WELCOME TO ONLINE VOTING PORTAL</b>

        <div class="row">
        <div class="col-md-10 col-md-offset-4" id="login">

           <form method="POST" action="login.php">
            <div class="form-group">
                <br>
              <input type="submit" class="btn btn-sucess" name="Login" value="login">
              </div>
            </form>  
               <form method="POST" action="register.php">   
            <div class="form-group">
                <br><br>
              <input type="submit" class="btn btn-sucess" name="Register" value="Register">
             </div>
            </form> 
             <form method="POST" action="adminlogin.php">   
            <div class="form-group">
                <br><br>
              <input type="submit" class="btn btn-sucess" name="AdminLogin" value="Admin Login">
             </div>
            </form>              
        </div>
    </div>
    
    </body>

</html>