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


$sql = "UPDATE `phpmy_table1`
         SET `Age` = 23 WHERE `srno` = 3";
$result = mysqli_query($db, $sql);

if ($result) {
    echo "<br>The Row(s) are updated successfully!";
}
else {
    echo "<br>The Row(s) are not updated becuase of error ---> " .mysqli_error($db);
}
?>