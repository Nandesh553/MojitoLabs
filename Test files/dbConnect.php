<?php
$servername="localhost";
$username="root";
$password="lenovo";
$db="flexdb553";
$conn = new mysqli($servername, $username, $password,$db);
if($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}
else
{
	//echo 'Connection Successfull.';
}
?>
