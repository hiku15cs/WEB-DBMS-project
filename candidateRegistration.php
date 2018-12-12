<!DOCTYPE html>
<html lang="en">

<head>
    <title>Candidate Registration page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="register.css"> 
    <link href="bootstrap.min.css" rel="styleheet" type="text/css">
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>CANDIDATE REGISTRATION..!!!</h1>
    <form class="form" action="candidateprocess.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
     
      <input type="text" placeholder="CANDIDATE ID" name="CID" required />
       <input type="text" placeholder="CANDIDATE NAME" name="CName" required />
        <input type="text" placeholder="Address" name="Address" required />
        <input type="text" placeholder="Party ID" name="PID" required />
        <input type="submit" value="Register" name="Register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
    
    </body>

</html>