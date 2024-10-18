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


$sql = "INSERT INTO phpmy_table1(srno, Name, Age, Gender)
        VALUES (1,'Om', 17, 'Male'),
               (2,'Shruti', 21, 'Female'),
               (3,'Raj', 19, 'Male'),
               (4, 'Sam', 20, 'Male'),
               (5, 'Surya', 25, 'Male')";
$result = mysqli_query($db, $sql);

if ($result) {
    echo "<br>The Row(s) are inserted successfully!";
}
else {
    echo "<br>The Row(s) not inserted becuase of error ---> " .mysqli_error($db);
}
?>