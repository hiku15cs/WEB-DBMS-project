<?php
 include 'database.php';
 $sql="SELECT * FROM party";
 $result=mysqli_query($con,$sql);
// print_r($result);
if(isset($_POST['party'])){
    $partyid=$_POST['partyname'];
    $sql="SELECT * FROM candidate where PID='$partyid'";
    $result1=mysqli_query($con,$sql);
    }
    if(isset($_POST['count'])){
    $candidate=$_POST['candidate'];
    $sql="SELECT * FROM `result` where CID='$candidate'";
    $result2=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result2);
    $count=$row['VoteCount'];
    $count=$count+1;
    $sql="UPDATE `result` SET `VoteCount` = '$count' WHERE `result`.`CID` = '$candidate'";
    $result3=mysqli_query($con,$sql);
    header("location: thnku.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting page</title>

	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="container">
        <b id="login-Name"><center> DROP YOUR VOTE HERE!!!</center></b>
        <div class="row">
        		        </div>
    </div>
			<form method="POST" action="main.php">   
            <div class="form-group">
                <br><br>
      <fieldset>
       <legend>Select a Party for your Vote.</legend>
            <tr>
                <td>choose your party</td>
                <td>
                    <select name="partyname">
                    <?php while($row=mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['PID'];?>"><?php echo $row['PName'];?></option>
                    <?php endwhile;?>
                    <input type="submit" name="party" value="select party">
                </select>
                </td>
          </tr>
          <tr>
              <td>choose candidaate:</td>
              <td>
                  <select  name="candidate">
                       <?php while($row=mysqli_fetch_assoc($result1)):;?>
                        <option value="<?php echo $row['CID'];?>"><?php echo $row['CName'];?></option>
                    <?php endwhile;?>

                  </select>
              </td>

          </tr>
            <input type="submit" name="count" value="vote">
          </form>
        </p>       
      </fieldset> 
             </div>
            </form>          
</body>
</html>