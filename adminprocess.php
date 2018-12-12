<?php
    $con=mysqli_connect("localhost","root","","project");
    if(mysqli_connect_errno()){
        echo "access denied";
    }
?>

<?php
    
    session_start();
    if(isset($_POST['login'])){
            $user=mysqli_real_escape_string($con,$_POST['user']);
            $password=mysqli_real_escape_string($con,$_POST['password']);


            $sql="select * from admin where username='$user' and password='$password'";
            $result=mysqli_query($con,$sql)
            or die("Failed to query database".mysql_error());
            $row =mysqli_fetch_array($result);
           //s echo($row)

            if($row['username']==$user && $row['password']=$password){
                echo "Login Sucess!!!  welcome  " .$row['username'];
                header("location: adminoption.php");
            }

            else{
                echo "Failed to Login!!!";
            }





    }

?>

