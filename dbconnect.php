<?php
function connectdb()
{
$servername="localhost";
$username="root";
$password="";
$db_name="santrupti";
$conn=new mysqli($servername,$username,$password,$db_name,3306);
if($conn->connect_error){die("Connection Failed ".$mysqli->connect_error);}
return $conn;
}
?>
 