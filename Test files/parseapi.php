<?php include 'dbConnect.php';?>
<?php

header('Content-type: application/json;');
$jsondata = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=19.1973,72.9567&radius=50000&types=gym&key=AIzaSyCNYHb0MPSvnUo1Cid2_Ffn0qMyWDf5yzw");

//storing it into array.
	$sdata = json_decode($jsondata,true);
	  
    //print_r($sdata);
    $num=count($sdata["results"]);
    //echo $num."\n\n";
    /*
    for($x=0;$x<$num;$x++)
    {  
        $name=$sdata["results"][$x]["name"];
        $rating=$sdata["results"][$x]["rating"];
        $address=$sdata["results"][$x]["vicinity"];
        $lat=$sdata["results"][$x]["geometry"]["location"]["lat"];
        $lng=$sdata["results"][$x]["geometry"]["location"]["lng"];
        //echo $name." ".$rating." ".$lat." ".$lng."\n";
        //echo $address."\n";
        $sql="insert into gym (gymName,gymRating,gymAddress,gymLat,gymLng)
        values('$name','$rating','$address','$lat','$lng')";
           
        if($conn->query($sql) === TRUE){
        echo "Successfully updated"."\n";
        }
        else{echo "Code is rubbish.".$sql."\n".$conn->error;}
    }
*/    
?>