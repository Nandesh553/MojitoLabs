<?php include 'dbconnect.php';?>

<?php
	header('Content-type: application/json;');
//read the json file contents
    $jsondata = file_get_contents("users.json");	
//echo $jsondata;
	
//storing it into array.
	$sdata = json_decode($jsondata,true);

//echo $sdata;
//print_r($sdata);
for($x=0;$x<count($sdata);$x++)
{
	$userId = $sdata[$x]['userId'];
	$name = $sdata[$x]['name'];
	$phoneNo = $sdata[$x]['phoneNo'];
	$email = $sdata[$x]['email'];
	$password = $sdata[$x]['password'];
	//echo $cId;
	
	$sql= "insert into `users` (name,phoneNo,email,password) values 
	('$name','$phoneNo','$email','$password')";


	$result=mysqli_query($conn,$sql);

	echo "update successfull";
}
$conn->close();
?>