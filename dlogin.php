<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['blogin']))
{
$demail=test_input($_POST['demail']);
$dpassword=test_input($_POST['dpassword']);
$dpassword=md5($dpassword);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from donor where demail= '".$demail."' and dpassword= '".$dpassword."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				$_SESSION['DID']=$row['did'];	
				$_SESSION['DNAME']=$row['dname'];	
				$_SESSION['DEMAIL']=$row['demail'];	
				}
				header("location: ddashboard.php");
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
