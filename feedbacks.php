<?php 
if(isset($_POST['btnsubmit']))
{

include 'dbconnect.php';
$fname=test_input($_POST['fname']);
$femail=test_input($_POST['femail']);
$subject=test_input($_POST['subject']);
$message=test_input($_POST['message']);
$fdate= date('d-m-y');


//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO feedback(fname,femail,subject,message,fdate) VALUES(?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('sssss',$fname,$femail,$subject,$message,$fdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your feedback is successfully sent!"); window.location="feedbacks.html"; </script>';
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
