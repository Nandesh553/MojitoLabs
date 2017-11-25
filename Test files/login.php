<?php include 'dbconnect.php';?>

<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      header('Content-type: application/json;');
	  //read the json file contents
	  $jsondata = file_get_contents("login.json");	
	  //echo $jsondata;
	
  	  //storing it into array.
	  $sdata = json_decode($jsondata,true);
	  
	  $email=$_POST['email'];
	  $password=$_POST['password'];
      
      $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      //If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>