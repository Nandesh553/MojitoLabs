<?php include 'dbconnect.php';?>

<?php
//$var=$_GET['var'];
$result = mysqli_query($conn,"SELECT * FROM category"); 
$store=array();
echo "<br>";
while($row=mysqli_fetch_array($result))
{
	//echo $row['Category_id'].' '.$row['Parent_id'].' '.$row['Category_name'].' '.$row['Last_updated'].'<br/>';
	$store[] = $row;
}

$fp = fopen('test.json', 'w+');
if(!fwrite($fp, json_encode($store)))
{
	die('Error : File Not Opened. ' . mysql_error());
}
else
{
    echo "Data Retrieved Successully!!!";
}

fclose($fp);



if(!$result) {
    die("<br/>MySQL Error: " . mysqli_error());
}
else
{
	
}

?>	