<?php
 include 'database.php';
 if(isset($_POST['Next'])){
  header("location: index.php");
//  $sql="call reultshow()";
  //print_r($sql);
  // $result3=mysqli_query($con,$sql);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Thanku page</title>
	 <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="thnku.css"> 
</head>
<body>
	<div class="container">
		 <b id="login-Name"><center>THANKS FOR YOUR VOTE.<br>
	              NOW YOU ARE GOIING TO CREATE A NEW NATION.</center>
	              <br><br><br><br><br><br>
	     <div class="col-md-10 col-md-offset-6" id="login">

	      <form method="POST" action="thnku.php"> 
	     <input type="submit" class="btn btn-sucess" name="Next" value="Next Voter">   
	     </form> 
	     </div>
       


</body>
</html>