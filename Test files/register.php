<?php include 'dbconnect.php';?>

<?php
	header('Content-type: application/json;');
//read the json file contents
    $jsondata = file_get_contents("users.json");	
//echo $jsondata;
	
//storing it into array.
	$sdata = json_decode($jsondata,true);

//echo $sdata;

	$name = $sdata[0]['name'];
	$mob = $sdata[0]['mob'];
	$email = $sdata[0]['email'];
	$password = $sdata[0]['password'];
	
	$sql= "insert into `users` (name,mob,email,password) values 
	('$name','$mob','$email','$password')";


	$result=mysqli_query($conn,$sql);

	echo "update successfull";
$conn->close();
?>