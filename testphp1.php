<?php include 'dbConnect.php'; ?>
	
<?php
$pName=$_POST['productName'];

if($_POST['button']== 'product')
{
	$sql="select * from getProduct where productName='$pName'";
	$result=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_assoc($result);
	
	echo $row['productId'];
	header('Content-type: text/javascript');
	echo json_encode($row, JSON_PRETTY_PRINT);
}
elseif($_POST['button']== 'category')
{
	$sql01="select * from getProduct where productName='$pName'";
	$result01=mysqli_query($conn,$sql01);
	$temp01=mysqli_fetch_assoc($result01);
	
	$id=$temp01['categoryId'];
	
	$sql02="select * from getProduct where categoryId='$id'";
	$result02=mysqli_query($conn,$sql02);
	$store=array();
	while($temp02=mysqli_fetch_assoc($result02))
	{
		$store[]=$temp02;
	}	
	
	header('Content-type: text/javascript');
	echo json_encode($store, JSON_PRETTY_PRINT);

}
?>	