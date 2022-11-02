<?php
$servrname = "localhost";
$username = "root";
$password = "";
$dbname = "OnlineFood";

$conn = mysqli_connect($servrname,$username,$password,$dbname);
if(mysqli_connect_errno()){
	echo "Connection to database failed: ".mysqli_connect_error();
	exit();
}


$umail = $_POST['mail'];
$upswrd = $_POST['pass'];

$find = "SELECT * FROM users WHERE email='$umail' AND pswrd='$upswrd'";
$result = mysqli_query($conn,$find);
if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);
        $id = $row["id"];
        $fstname = $row["firstname"];
        $lstname = $row["lastname"];
        $lct = $row["loc"];
        echo '<script type ="text/JavaScript">';
        echo 'alert("Login Successful")';
        echo '</script>';
        $_POST['uid'] = $id;
        $_POST['ufname'] = $fstname;
        $_POST['ulname'] = $lstname;
        $_POST['uloc'] = $lct;
        include('index2.php');
}
else{
    echo '<script type ="text/JavaScript">';
    echo 'confirm("Invalid email or password")';
    echo '</script>';
    include("index.html");
}

mysqli_close($conn);
?>