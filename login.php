<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['blogin']))
{
$remail=test_input($_POST['remail']);
$rpassword=test_input($_POST['rpassword']);
$rpassword=md5($rpassword);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from receiver where remail= '".$remail."' and rpassword= '".$rpassword."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				$_SESSION['UID']=$row['uid'];	
				$_SESSION['RNAME']=$row['rname'];	
				$_SESSION['REMAIL']=$row['remail'];
				$_SESSION['RPASSWORD']=$row['rpassword'];	
				}
				header("location: rdashboard.php");
	}
	else
	{
		//header("Location:login.html");
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
