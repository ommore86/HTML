<?php
$hostname = "localhost";
$databasename = "COLLEGE";
$username = "root";
$password = "";

$conn = new mysqli($hostname, $databasename, $username, $password);

if($conn->connect_error) die($conn->connect_error);
?>