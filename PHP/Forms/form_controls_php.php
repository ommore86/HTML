<?php
if($_SERVER["REQUEST_METHOD"]==="GET")
{
    if(isset($_GET["name"]) && isset($_GET["address"]) && isset($_GET["address"]) && isset($_GET["gen"]))
    {
        echo "Name is: ".$_GET["name"]."<br>";
        echo "Gender is: ".$_GET["gender"]."<br>";
        echo "Gender is: ".$_GET["gen"]."<br>";
        echo "Address is: ".$_GET["address"]."<br>";
        echo "Subjects are: ".$_GET["eec"].$_GET["bec"].$_GET["maths"].$_GET["pic"]."<br>";
    }
    else
    {
        echo "Something went wrong in form!!!<br>Please Try Again Later....";
    }
}

// if($_SERVER["REQUEST_METHOD"]==="POST")
// {
//     if(isset($_POST["uid"]))
//     {
//         echo "User ID is:".$_POST["uid"];
//     }
// }    
?>