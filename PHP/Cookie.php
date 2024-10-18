<?php
$cookie_name = "user";
$cookie_value = "Ram";
setcookie($cookie_name, $cookie_value, time()+3000, "/");
?>
<html>
    <body>
        <?php
        echo "Cookie Name - $cookie_name <br>";
        echo "Value is: $_COOKIE[$cookie_value]";
        ?>
    </body>
</html>