<?php
$conn = mysqli_connect("localhost", "root", "passwd", "ip2");
 
//Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
//Escape user inputs for security
$Author = mysqli_real_escape_string($conn, $_POST['Author']);
$Content = mysqli_real_escape_string($conn, $_POST['Content']);

 
//Attempt insert query execution
$sql = "INSERT INTO author (Author, Content, Date) VALUES ('$Author', '$Content', CURDATE())";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
	header("refresh:2;url=admin.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
//Close connection
mysqli_close($conn);
?>