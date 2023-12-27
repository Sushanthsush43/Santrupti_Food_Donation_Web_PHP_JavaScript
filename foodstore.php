<?php 
session_start();
if(isset($_POST['btnsubmit']))
{
include 'dbconnect.php';
$donor_id=$_SESSION['DID'];
$foodname=test_input($_POST['foodname']);
$title=test_input($_POST['title']);
$ftype=test_input($_POST['ftype']);
$quantity=test_input($_POST['quantity']);
$descp=test_input($_POST['descp']);
$adate= date('d-m-y');
$fileToUpload=$_FILES['foodimage']['name'];



//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO food(donor_id,foodname,title,ftype,quantity,descp,adate,foodimage) VALUES(?,?,?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssssssss',$donor_id,$foodname,$title,$ftype,$quantity,$descp,$adate,$fileToUpload);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your food is added successfull!"); window.location="viewfooddonor.php"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in adding food Please try again!"); </script>';
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
