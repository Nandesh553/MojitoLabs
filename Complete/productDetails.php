<?php include 'dbconnect.php';?>

<?php
	header('Content-type: application/json;');
//read the json file contents
    $jsondata = file_get_contents("product.json");	
//echo $jsondata;
	
//storing it into array.
	$sdata = json_decode($jsondata,true);

//echo $sdata;
//print_r($sdata);

$pId= $sdata[0]['productId'];
//echo $cId;
	
$sql= "Select * from `product` where `productId`='$pId'";	


$result=mysqli_query($conn,$sql);

$store=array();
while($row=mysqli_fetch_assoc($result))
{
	$store[]=$row;
}


echo json_encode($store, JSON_PRETTY_PRINT);

$conn->close();
?>