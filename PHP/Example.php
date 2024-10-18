<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Enter the name<input type="text" name="nm"><br>
        <br>
        Enter the email <input type="email" name="em"><br>
        <br>
        Enter the age <input type="number" name="age"><br>
        <br>
        Enter the mobile number<input type="mobile" name="mb"><br>
        <br>
        Enter the address<input type="text" name="addr"><br>
        <br>
        <input type="submit" name="submit"><br>
        <br>
    </form>

    <?php
    $name=$_POST["nm"];
    $email=$_POST["em"];
    $age=$_POST["age"];
    $address=$_POST["addr"];
    $mobile=$_POST["mb"];

    echo "name is: ".$name."<br>";
    echo "email is: ".$email."<br>";
    echo "age is: ".$age."<br>";
    echo "address is: ".$address."<br>";
    echo "mobile number is: ".$mobile."<br>";
?>
</body>
</html>