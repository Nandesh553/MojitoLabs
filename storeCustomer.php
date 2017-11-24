<?php include 'dbconnect.php';?>

<?php
$cId= $_POST['cId'];
$cEmail= $_POST['cEmail'];
$cPassword= $_POST['cPassword'];
$cName= $_POST['cName'];
$cContact= $_POST['cContact'];
$cAddress= $_POST['cAddress'];
$cCity= $_POST['cCity'];
$cState= $_POST['cState'];
$cOrder= $_POST['cOrder'];

$sql= "INSERT INTO customer(customerId,customerEmail,customerPassword,customerName,customerContact,customerAddress,customerCity,customerState,customerOrder)
VALUES ('$cId','$cEmail','$cPassword','$cName','$cContact','$cAddress','$cCity','$cState','$cOrder')";
if($conn->query($sql) === TRUE){
	echo "Successfully updated";
}
else{echo "Code is rubbish.".$sql."<br>".$conn->error;}
echo "<br>";
$conn->close();
?>

//customerId,customerEmail,customerPassword,customerName,customerContact,customerAddress,customerCity,customerState,customerOrder