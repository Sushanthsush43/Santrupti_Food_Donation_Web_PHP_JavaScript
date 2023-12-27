<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['blogin']))
{
//$aname=test_input($_POST['aname']);
$aname=test_input($_POST['aname']);
$apassword=test_input($_POST['apassword']);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from admin where aname= '".$aname."' and apassword= '".$apassword."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				
			//	$_SESSION['ANAME']=$row['aname'];
				$_SESSION['ANAME']=$row['aname'];	
				$_SESSION['APASSWORD']=$row['apassword'];	
			
				header("location: adashboard.php");
	}
	else
	{
		//header("Location:admin.html");
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