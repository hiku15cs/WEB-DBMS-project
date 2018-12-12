<?php
    $con=mysqli_connect("localhost","root","","project");
    if(mysqli_connect_errno()){
        echo "access denied";
    }
?>

<?php
	
	$sql="call resultshow";
	$result=mysqli_query($con,$sql);
	//print_r($result);


?>
 
<html>
<body style="margin-top:30px; background-color:aqua;">


<center><table width="1000" border="1" bordercolor="red" >
<tr>
<td colspan="7" align="center" bgcolor="grey" style="font-size:40px; text-color:green; margin:10px; text-align:centre;" > <b> <i>FINAL RESULTS</i></b></td>
</tr>
<tr>
<th> CID</th>
<th><b>VOTECOUNT</b></th>
<th><b>PID</th>

</tr>
 
<?php
while($institute=mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>" .$institute['CID']."</td>";
	echo "<td>" .$institute['VoteCount']."</td>";
	echo "<td>" .$institute['PID']."</td>";
	
	echo "</tr>";
}
 
?>
</div>
