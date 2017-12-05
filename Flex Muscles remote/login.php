<?php include 'dbConnect.php';?>

<?php
   session_start();
   
      /*// username and password sent from form 
      
      header('Content-type: application/json;');
	  //read the json file contents
	  $jsondata = file_get_contents("login.json");	
	  //echo $jsondata;
	
  	  //storing it into array.
	  $sdata = json_decode($jsondata,true);
	  
      //print_r($sdata);
      
	  $email=$sdata[0]['email'];
	  $password=$sdata[0]['password'];
      
      $email="nandesh";
	  $password="nandesh";
      */
      $email=$_POST['email'];
	  $password=$_POST['password'];
       
      $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      
      $count = mysqli_num_rows($result);
      
      //If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $email;
         //header("location: home.php");
         echo json_encode($row, JSON_PRETTY_PRINT);
      }
      else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
      $conn->close();
?>