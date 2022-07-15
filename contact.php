<?php
//conect to database
$servername = "database-1.ccqtyec2mqcu.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$db = "test2";
$conn = mysqli_connect($servername, $username, $password,$db);
 
//checking connection  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "connected";
}
//insert
$name = $_POST['name']; 
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber']; 
$message = $_POST['message'];   

$run = "INSERT INTO `test2`(name, email, phonenumber, message) VALUES ( '$name' , '$email' , '$phonenumber' , '$message' )";
$result = mysqli_query( $conn , $run) ;
if($result)
{
	echo "<br><br><br><br><br><br><br><br><h1 align='center'>Yours Details are Submitted...!!</h1>";
        echo "<br><br><br><br><br><br><br><br><h1 align='center'>Thank You...!!</h1>";
        header( "refresh:3;url=contact.html" );
    
}
else
{
	echo "not registered";
        header( "refresh:3;url=contact.html" );
} 

?>
