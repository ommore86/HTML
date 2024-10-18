<?php
session_start();

session_register("name", "John");

function session_register($key, $value)
{
    $_SESSION[$key] = $value;
    echo $value." is registered <br>";
}

function session_is_registered($key)
{
    if(isset($_SESSION[$key]))
    {
        "Session exists";
    }
    else
    {
        "Session does not exists";
    }
}
?>