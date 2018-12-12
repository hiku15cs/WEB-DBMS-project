
<?php
    $con=mysqli_connect("localhost","root","","project");
    if(mysqli_connect_errno()){
        echo "access denied";
    }
?>
<?php
    session_start();
    if(isset($_POST['Register'])){
        $CID=mysqli_real_escape_string($con,$_POST['CID']);
        $CName=mysqli_real_escape_string($con,$_POST['CName']);
        $Address=mysqli_real_escape_string($con,$_POST['Address']);
        $PID=mysqli_real_escape_string($con,$_POST['PID']);
        $num=0;
        $sql="INSERT INTO `candidate` (`CID`, `CName`, `Address`, `PID`) VALUES ('$CID', '$CName', '$Address', '$PID')";
        $result=mysqli_query($con,$sql);
        $sql1="INSERT INTO `result` (`CID`, `VoteCount`,`PID`) VALUES ('$CID', '$num', '$PID')";
        $result1=mysqli_query($con,$sql1);
       // print_r($sql1);
        if($result){
            if($result1){
            header("location: index.php");}
        }
        else
        {
            echo "Candidate ID already exist!";
        }              
        
    }
   
?>

