<?php include 'dbconnect.php';?>

<?php
	header('Content-type: application/json;');
//read the json file contents
    $jsondata = file_get_contents("product.json");
	
	echo $jsondata;
	
//storing it into array.
	$sdata = json_decode($jsondata,true);

//get product details.
	foreach($sdata as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value[$x];
  
}
	echo $sdata;
	print_r($sdata);
	echo $sdata["1"]["productId"];
	$pId=$sdata["productId"];
	$cId= $sdata['categoryId'];
	$name=$sdata['productName'];
	$price=$sdata['productPrice'];
	$size=$sdata['productSize'];
	$color=$sdata['productColor'];
	$stock=$sdata['productStock'];
	
	
	
$sql= "INSERT INTO product(productId,categoryId,productName,productPrice,productSize,productColor,productStock)
VALUES('$pId','$cId','$name','$price','$size','$color','$stock')";

if($conn->query($sql) === TRUE){
	echo "Successfully updated";
}
else{echo "Code is rubbish.".$sql."<br>".$conn->error;}
echo "<br>";
$conn->close();
?>