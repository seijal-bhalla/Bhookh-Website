<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OnlineFood";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql_table = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    loc VARCHAR(50),
    pswrd VARCHAR(30))";

if(mysqli_query($conn, $sql_table)){
 	echo "Table Created Successfully";
} else
{
	echo "error: ".mysqli_error($conn);
}

mysqli_close($conn);
?>