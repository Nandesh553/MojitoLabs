<?php include 'dbconnect.php';?>

<?php
$result = mysqli_query($conn,"SELECT * FROM category"); 
//Store data in an array.
$store=array();

while($row=mysqli_fetch_assoc($result))
{
	//echo $row['Category_id'].' '.$row['Parent_id'].' '.$row['Category_name'].' '.$row['Last_updated'].'<br/>';
	$store[] = $row;
}

/*
***To store data on a file in json format***
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
*/

//***Output in json format***.
header('Content-type: text/javascript');
echo json_encode($store, JSON_PRETTY_PRINT);

if(!$result) {
    die("<br/>MySQL Error: " . mysqli_error($conn));
}

?>	