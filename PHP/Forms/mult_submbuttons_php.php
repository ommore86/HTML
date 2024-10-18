<?php
if($_SERVER["REQUEST_METHOD"]==="POST")
{
    if(isset($_POST["addbtn"]))
    {
        echo "Addition: ".$_POST["n1"]+$_POST["n2"];
    }
    elseif(isset($_POST["subbtn"]))
    {
        echo "Subtraction: ".$_POST["n1"]-$_POST["n2"];
    }
}
?>