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

$ufname = $_POST['fname'];
$ulname = $_POST['lname'];
$umail = $_POST['mail'];
$uloc = $_POST['location'];
$upswrd = $_POST['pass'];

if(isset($_POST['register']))
{
    $insert="INSERT INTO users(firstname,lastname,email,loc,pswrd) VALUES ('$ufname','$ulname','$umail','$uloc','$upswrd')";
    if(mysqli_query($conn,$insert)){
        echo '<script type ="text/JavaScript">';
        echo 'alert("Registered successfully!")';
        echo '</script>';
        include("index.html");
    }
    else
    {
        echo '<script type ="text/JavaScript">';
        echo 'alert("Some error Occured: ".mysqli_error($conn))';
        echo '</script>';
        include("index.html");
    }
}

mysqli_close($conn);

?>