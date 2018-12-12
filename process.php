
<?php
    $con=mysqli_connect("localhost","root","","project");
    if(mysqli_connect_errno()){
        echo "access denied";
    }
?>
<?php
    session_start();
    if(isset($_POST['Register'])){
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $cnfpassword=mysqli_real_escape_string($con,$_POST['confpassword']);
        $DOB=mysqli_real_escape_string($con,$_POST['DOB']);
       // $Age=mysqli_real_escape_string($con,$_POST['Age']);
        if($password==$cnfpassword){
          // if($Age>=18){
        $user=mysqli_real_escape_string($con,$_POST['username']);
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        

        $sql="INSERT INTO `register` (`username`, `Name`, `Email`, `password`, `CnfPassword`, `DOB`) VALUES ('$user', '$name', '$email', '$password', '$cnfpassword', '$DOB')";
        $result=mysqli_query($con,$sql);

        if($result){
            header("location: index.php");
        }
        else
        {
            echo "username already exist!";
        }              
        
    
    /*else{
        echo "your age is below 18.";
         }*/
    }
    else{
        echo "password doesn't matches!";
    }
}

   
?>

