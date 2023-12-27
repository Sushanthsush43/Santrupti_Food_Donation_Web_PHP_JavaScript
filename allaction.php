<?php
session_start(); 
//deleting donor
include 'dbconnect.php';

if(isset($_POST['btnsend']))
{
$matter=test_input($_POST['matter']);
//sending mail
		$to = $semail;
		$subject = "Santrupti.com -Alert Mail form Santrupti. ";
		//$txt = "Hi! Your registration is done in Santrupti App. Now you can donate food. Thank you Donor!!!";
		$headers = "From: santrupti0709@gmail.com" . "\r\n" ."CC: smithapandeshwara@gmail.com";
		mail($to,$subject,$matter,$headers);
		//mail ended
		echo '<script type="text/javascript">alert("Mail is sent successfully!"); window.location="adashboard.php"; </script>';

}


if(isset($_GET['cancel']))
{
	$mysqli=connectdb();
	$userid=test_input($_GET['cancel']);
	$query = "delete from feedback where slno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$uid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:cancellation.php");
}

//deleting food

if(isset($_GET['fno']))
{
	$fno=test_input($_GET['fno']);
	$mysqli=connectdb();
	$query = "delete from food where fno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$fno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewfood.php");
}




//denying requests by donor
	
if(isset($_GET['apno']))
{
	
	$fno=test_input($_GET['apno']);
	$mysqli=connectdb();

	$query = "update food set admin_status='1' where fno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$fno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewfood.php");
}


//delete feedback
if(isset($_GET['slno']))
{
	$slno=test_input($_GET['slno']);
	$mysqli=connectdb();
	$query = "delete from feedback where slno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$slno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewfeedback.php");
}


//delete receiver
if(isset($_GET['uid']))
{
	$uid=test_input($_GET['uid']);
	$mysqli=connectdb();
	$query = "delete from receiver where uid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$uid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_receivers.php");
}

	
//delete donor
if(isset($_GET['did']))
{
	$did=test_input($_GET['did']);
	$mysqli=connectdb();
	$query = "delete from donor where did=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$did);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewdonors.php");
}


//saving claimed food
if(isset($_GET['cno']))
{
		
	$cno=test_input($_GET['cno']);
	$mysqli=connectdb();

	$query = "update food set food_status='1', uid='".$_SESSION['UID']."' where fno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$cno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:rdashboard.php");
}
	


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>