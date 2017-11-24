<?php include 'dbconnect.php';?>

<?php
$gigNo= $_POST['gigNo'];
$partNo= $_POST['partNo'];
$description= $_POST['description'];
$testerNo= $_POST['testerNo'];
$calAgency= $_POST['calAgency'];
$calDue= $_POST['calDue'];
$sql= "INSERT INTO  (gigNo,partNo,description,testerNo,calAgency,calDue)
VALUES ('$gigNo','$partNo','$description','$testerNo','$calAgency','$calDue')";
if($conn->query($sql) === TRUE){
	echo "Successfully updated";
}
else{echo "Code is rubbish.".$sql."<br>".$conn->error;}
echo "<br>";
$conn->close();
?>