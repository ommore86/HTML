<?php
session_start();

// echo "Setting session variables...<br>";
// $_SESSION["Name"] = "Om";
// $_SESSION["Address"] = "Kalyan";

echo "User Name: ".$_SESSION["Name"]."<br>";
echo "User Address: ".$_SESSION["Address"]."<br>";

// session_unset();

// echo "User Name: ".$_SESSION["Name"]."<br>";
// echo "User Address: ".$_SESSION["Address"]."<br>";

// session_destroy();

// echo "User Name: ".$_SESSION["Name"]."<br>";
// echo "User Address: ".$_SESSION["Address"]."<br>";
?>