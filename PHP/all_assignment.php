<!DOCTYPE html>
<html>

<head>
    <title>Assignments</title>
</head>

<body style="background-color: aqua">
    <h1><u>All assignments of PHP </u>:-</h1>
    <hr>

    <h3>Q.1. Display Hello World using PHP</h3>
        <?php 
        echo "Hello World";
        ?>
    <hr>

    <h3>Q.2. Addition of Two Numbers using PHP</h3>
        <?php
        $num1 = 20;
        $num2 = 33;
        $sum = $num1 + $num2;
        echo "Sum of $num1 and $num2 is: $sum";
        ?>
    <hr>

    <h3>Q.3. Whether a number is Even or Odd using PHP</h3>
        <?php
        $num = 24;

        if($num%2==0) {
            echo "$num is an Even Number";
        }
        else{
            echo "$num is an Odd Number";
        }
        ?>
    <hr>

    <h3>Q.4. Find Factorial of a Number using PHP</h3>
        <?php
        $num = 4;
        $factorial = 1;
        
        for ($i=$num; $i>=1; $i--) { 
            $factorial = $factorial * $i;
        }
        
        echo "Factorial of $num is: $factorial";
        ?>
    <hr>

    <h3>Q.5. Display Fibonacci Series using PHP</h3>
        <?php
        $num = 0;
        $n1 = 0;
        $n2 = 1;
        
        echo "<h4>Fibonacci Series for First 12 Numbers: </h4>";
        
        echo "$n1 $n2 ";
        while ($num < 10) {
            $n3 = $n2 + $n1;
            echo "$n3 ";
            $n1 = $n2;
            $n2 = $n3;
            $num = $num + 1;
        }
        ?>
        <hr>

    <h3>Q.6. Display Whether the given String is Palindrome or not using PHP</h3>
        <?php
        $string = "anna";
        echo "String - $string <br>";
        if(strrev($string) == $string){
            echo "$string is a Palindrome";
        }
        else{
            echo "$string is Not a Palindrome";
        }
        ?>
    <hr>

    <h3>Q.7. Count the no. of Words in a String using PHP</h3>
        <?php
        $string = "Hello Guys";
        $num = str_word_count($string);
        echo "String - $string <br>";
        echo "The string '$string' contains: $num words";
        ?>
    <hr>

    <h3>Q.8. Calculate the Area and Perimeter of a Rectangle given its Length and Width, using PHP</h3>
        <?php
        $length = 15;
        $width = 10;
        
        $perimeter = 2*($length + $width);
        $area = $length*$width;
        
        echo "Length:- 15, Width:- 10 <br>";
        echo "Perimeter = $perimeter <br>";
        echo "Area = $area";
        ?> 
    <hr>

    <h3>Q.9. Calculate Simple Interest using PHP</h3>
        <?php
        $p = 5000;
        $r = 10;
        $t = 1;
        $si = ($p * $r * $t)/100;

        echo "Principal Amount: ₹$p <br>";
        echo "Rate of Interest: $r% <br>";
        echo "Time Period: 1 year <br>";
        echo "Simple Interest = ₹$si <br>";
        echo "Total Amount = ₹".($p+$si);
        ?>
    <hr>

    <h3>Q.10. Calculate and Display passing criteria as per percentage using PHP</h3>
        <?php
        $english = 88;
        $science = 90;
        $maths = 95;
        $per = (($english + $science + $maths)/300)*100;

        echo "Percentage is: $per% <br>";
        if ($per > 75) {
            echo "You have Passed with Distinction Class";
        }
        elseif ($per > 60) {
            echo "You have Passed with First Class";
        }
        elseif ($per > 45) {
            echo "You have Passed with Second Class";
        }
        else {
            echo "Failed";
        }
        ?>
    <hr>

</body>
</html>