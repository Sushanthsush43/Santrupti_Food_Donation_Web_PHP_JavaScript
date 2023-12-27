<?php 
if(isset($_POST['btnsave']))
{

include 'dbconnect.php';
$semail=test_input($_POST['semail']);
$rdate= date('y-m-d');


//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO addsubscriber(semail,rdate) VALUES(?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ss',$semail,$rdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your subscription is successfull!"); window.location="index.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... try again!"); </script>';
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
