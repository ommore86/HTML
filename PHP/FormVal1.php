<html>
<body>

<form action="" method="GET">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="email" name="email"><br>
    <input type="submit" name="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $email = $_GET["email"];

    echo "Submitted Name: $name <br>";
    echo "Submitted Email: $email";
}
?>
</body>
</html>