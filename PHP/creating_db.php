<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = mysqli_connect($servername, $username, $password);

if(!$db){
    die("Error Detected".mysqli_error($db));
}
else {
    echo "Connection Established";
}


$sql = "CREATE DATABASE library2";
$result = mysqli_query($db, $sql);

if ($result) {
    echo "<br>The DB was created successfully!";
}
else {
    echo "<br>The DB not created becuase of error ---> " .mysqli_error($db);
}
?>