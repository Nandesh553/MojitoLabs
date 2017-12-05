<?php include 'dbConnect.php';?>

<?php
	header('Content-type: application/json;');
//read the json file contents
    $jsondata = file_get_contents("category.json");	
//echo $jsondata;
	
//storing it into array.
	$sdata = json_decode($jsondata,true);

//echo $sdata;
//print_r($sdata);

$cId= $sdata[0]['categoryId'];
//echo $cId;
	
$sql= "Select * from `product` where `categoryId`='$cId'";


$result=mysqli_query($conn,$sql);

$store=array();
while($row=mysqli_fetch_assoc($result))
{
	$store[]=$row;
}


echo json_encode($store, JSON_PRETTY_PRINT);

$conn->close();
?>