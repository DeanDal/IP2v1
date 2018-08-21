<?php

	//Define login info
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'passwd');
	define('DB_DATABASE', 'ip2');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
    //Username and Password from the form 
	  
    $Username = mysqli_real_escape_string($db,$_POST['Username']);
    $Password = mysqli_real_escape_string($db,$_POST['Password']); 
      
    $sql = "SELECT UserID FROM `admin login` WHERE Username = '$Username' and Password = '$Password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
      
	$count = mysqli_num_rows($result);

    if($count == 1) {
		header("location: admin.php");
    }else {
		header("location: wronglogin.html");
    }
   }
   
?>
