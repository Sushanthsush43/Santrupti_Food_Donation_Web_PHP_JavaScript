<?php 
if(isset($_POST['btnsubmit']))
{

include 'dbconnect.php';
$rname=test_input($_POST['rname']);
$gender=test_input($_POST['gender']);
$rmblno=test_input($_POST['rmblno']);
$raddress=test_input($_POST['raddress']);
$state=test_input($_POST['state']);
$city=test_input($_POST['city']);
$remail=test_input($_POST['remail']);
$rpassword=test_input($_POST['rpassword']);
$rpassword=md5($rpassword);
$rdate= date('d-m-y');


//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO receiver(rname,gender,rmblno,raddress,state,city,remail,rpassword,rdate) VALUES(?,?,?,?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('sssssssss',$rname,$gender,$rmblno,$raddress,$state,$city,$remail,$rpassword,$rdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your registration is successfull!"); window.location="registration.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in Signing up Please try again!"); </script>';
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
