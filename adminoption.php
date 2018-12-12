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
        <b id="login-Name">CHOOSE ANY OPTION</b>

        <div class="row">
        <div class="col-md-10 col-md-offset-3" id="login">

           <form method="POST" action="result.php">
            <div class="form-group">
                <br>
              <input type="submit" class="btn btn-sucess" name="Result" value="Result">
              </div>
            </form>  
               <form method="POST" action="candidateRegistration.php">   
            <div class="form-group">
                <br><br>
              <input type="submit" class="btn btn-sucess" name="CRegistration" value="Candidate registration">
             </div>
            </form>       
        </div>
    </div>
    
    </body>

</html>