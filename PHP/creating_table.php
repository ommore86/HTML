<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "stud";
$db = mysqli_connect($servername, $username, $password, $database);
if(!$db){
    die("Error Detected".mysqli_error($db));
}
else {
    echo "Connection Established";
}


$sql = "CREATE TABLE phpmy_table1 (
    srno INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(11) NOT NULL,
    Age INT(11) NOT NULL,
    Gender VARCHAR(11) NOT NULL
    )";
$result = mysqli_query($db, $sql);

if ($result) {
    echo "<br>The table was created successfully!";
}
else {
    echo "<br>The table not created becuase of error ---> " .mysqli_error($db);
}
?>