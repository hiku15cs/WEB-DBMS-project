<?php
include 'database.php';
if(isset($_POST['party'])){
	$partid=$_POST['partyname'];
	$sql="SELECT * FROM candidate where PID='$partyid'";
	$result=mysqli_query($con,$sql);
}
?>