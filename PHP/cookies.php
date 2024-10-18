<html>
<body><title>COOKIES</title></body>
<?php
// Creating Cookie
$name = "Om";
$address = "Kalyan";
setcookie($name, $address, time()+(60*60*24*365), "/");

// Accessing Cookie
if(isset($_COOKIE[$name]))
{
    echo "Cookie name is: ".$name."<br>";
    echo "Cookie value is: ".$_COOKIE[$name]."<br>";
}
else
{
    echo "Cookie is not set<br>";
}

// Deleting Cookie
setcookie("Stud", "Om", time()-3600, "/");
if(isset($_COOKIE["Stud"]))
{
    echo "Cookie name is: "."Stud"."<br>";
    echo "Cookie value is: ".$_COOKIE["Stud"]."<br>";
}
else
{
    echo "Cookie is not set<br>";
}
?>
</html>