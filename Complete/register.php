<?php include 'dbConnect.php';?>

<?php
/*	
    header('Content-type: application/json;');
//read the json file contents
    $jsondata = file_get_contents("register.json");	
//echo $jsondata;
	
//storing it into array.
	$sdata = json_decode($jsondata,true);

//print_r($sdata);
	
    $name = $sdata[0]['name'];
	$email = $sdata[0]['email'];
    $mob = $sdata[0]['mob'];
    $weight = $sdata[0]['weight'];
    $height = $sdata[0]['height'];
    $dob = $sdata[0]['dob'];
    $bloodGroup = $sdata[0]['bloodGroup'];
    $ailment = $sdata[0]['ailment'];
	$password = $sdata[0]['password'];
    */
    $name = $_POST['name'];
	$email = $_POST['email'];
    $mob = $_POST['mob'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $dob = $_POST['dob'];
    $bg = $_POST['bg'];
    $ailment = $_POST['ailment'];
	$password = $_POST['password'];
	
	$sql= "insert into `users` (name,email,mob,weight,height,dob,bg,ailment,password) values 
	('$name','$email','$mob','$weight','$height','$dob','$bg','$ailment','$password')";

if($conn->query($sql) === TRUE){
	echo "Successfully updated";
}
else{
    echo "Something is wrong.";
    //$sql."<br>".$conn->error;
    }

$conn->close();

?>