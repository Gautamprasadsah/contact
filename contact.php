<?php
//conect to database
$servername = "database-1.ccqtyec2mqcu.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$db = "contact";

$conn = mysqli_connect($servername, $username, $password,$db) or die ("unable to contact");

//insert
$name = $_POST['name']; 
$email = $_POST['email'];
$run = "INSERT INTO `contact`(name, email) VALUES ( '$name' , '$email')";
$result = mysqli_query( $conn , $run) ;
if($result)
{
	echo "<br><br><br><br><br><br><br><br><h1 align='center'>Yours Details are Submitted...!!</h1>";
        echo "<br><br><br><br><br><br><br><br><h1 align='center'>Thank You...!!</h1>";
        header( "refresh:3;url=index.html" );
    
}
else
{
	echo "not registered";
        header( "refresh:3;url=index.html" );
} 

?>
