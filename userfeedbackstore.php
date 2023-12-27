<?php 
session_start();
if(isset($_POST['btnsubmit']))
{

include 'dbconnect.php';
$uid=$_SESSION['UID'];
$uname=$_SESSION['RNAME'];
$uemail=$_SESSION['REMAIL'];
$usubject=test_input($_POST['usubject']);
$umessage=test_input($_POST['umessage']);
$udate= date('d-m-y');


//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO userfeedback(uid,uname,uemail,usubject,umessage,udate) VALUES(?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssssss',$uid,$uname,$uemail,$usubject,$umessage,$udate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your feedback is successfully sent!"); window.history.back();; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in posting feedback try again!"); </script>';
}
$statement->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
