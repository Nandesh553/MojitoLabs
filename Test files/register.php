<?php include 'dbconnect.php';?>

<?php
	header('Content-type: application/json;');
//read the json file contents
    $jsondata = file_get_contents("users.json");	
//echo $jsondata;
	
//storing it into array.
	$sdata = json_decode($jsondata,true);

print_r($sdata);
	
	$email = $sdata[0]['email'];
    $mob = $sdata[0]['mob'];
    $weight = $sdata[0]['weight'];
    $height = $sdata[0]['height'];
    $dob = $sdata[0]['dob'];
    $bloodGroup = $sdata[0]['bloodGroup'];
	$password = $sdata[0]['password'];
	
	$sql= "insert into `users` (email,mob,weight,height,dob,bloodGroup,password) values 
	('$email','$mob','$weight','$height','$dob','$bloodGroup','$password')";

if($conn->query($sql) === TRUE){
	echo "Successfully updated";
}
else{echo "Code is rubbish.".$sql."<br>".$conn->error;}
echo "<br>";
$conn->close();
	/*$result=mysqli_query($conn,$sql);

	echo "update successfull";
$conn->close();
*/
?>