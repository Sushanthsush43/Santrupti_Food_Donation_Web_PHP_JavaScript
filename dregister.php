<?php 
if(isset($_POST['btnsubmit']))
{

	include 'dbconnect.php';
	$dname=test_input($_POST['dname']);
	$dgender=test_input($_POST['dgender']);
	$dmblno=test_input($_POST['dmblno']);
	$daddress=test_input($_POST['daddress']);
	$dstate=test_input($_POST['dstate']);
	$dcity=test_input($_POST['dcity']);
	$demail=test_input($_POST['demail']);
	$dpassword=test_input($_POST['dpassword']);
	$dpassword=md5($dpassword);
	$ddate= date('d-m-y');


//mysql_connect("localhost", "root","");
	$mysqli = connectdb();
	$sql="select * from donor where demail='".$demail."'";
	$result=$mysqli->query($sql);
	if($result->num_rows>0)
	{
		echo '<script type="text/javascript">alert("Email  already exists. Please spcify another emailID.!"); window.history.back();</script>';
	}
	else
	{

	$query = "INSERT INTO donor(dname,dgender,dmblno,daddress,dstate,dcity,demail,dpassword,ddate) VALUES(?,?,?,?,?,?,?,?,?)";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sssssssss',$dname,$dgender,$dmblno,$daddress,$dstate,$dcity,$demail,$dpassword,$ddate);



	if($statement->execute())
	{
		
		//sending mail
		$to = $demail;
		$subject = "Santrupti.com - Your Registration successfully done. ";
		$txt = "Hi! Your registration is done in Santrupti App. Now you can donate food. Thank you Donor!!!";
		$headers = "From: santrupti0709@gmail.com" . "\r\n" ."CC: aishunaik789@gmail.com";
		mail($to,$subject,$txt,$headers);
		//mail ended
		echo '<script type="text/javascript">alert("Your registration is successfull!"); window.history.back(); </script>';
	}
	else
	{
	   echo '<script type="text/javascript">alert("Error... in Signing up Please try again!"); </script>';
	}
	$statement->close();
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
