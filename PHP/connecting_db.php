<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "stud";
$db = new mysqli($servername, $username, $password, $database);

if(!$db){
    die("Error Detected".mysqli_connect_error());
}
else {
    echo "Connection Established";
}
?>