<?php include 'dbconnect.php';?>

<?php
$pId=$_POST['pId'];
$cId= $_POST['cId'];
$name=$_POST['pName'];
$price=$_POST['price'];
$size=$_POST['size'];
$color=$_POST['color'];
$stock=$_POST['stock'];

$sql= "INSERT INTO product(productId,categoryId,productName,productPrice,productSize,productColor,productStock)
VALUES('$pId','$cId','$name','$price','$size','$color','$stock')";

if($conn->query($sql) === TRUE){
	echo "Successfully updated";
}
else{echo "Code is rubbish.".$sql."<br>".$conn->error;}
echo "<br>";
$conn->close();
?>