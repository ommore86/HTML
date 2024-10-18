<?php
class stud
{
    public $school;
    public $grade;

    function __construct($s, $g)
    {
        $this->school = $s;
        $this->grade = $g;
    }
}

$obj1 = new stud("SVVHS", 10);
echo print_r($obj1);
echo "<br><br>";


// Copy by Reference
// $obj2 = $obj1;
// $obj1->school = "St. Marys";
// $obj2->grade = 8;
// echo print_r($obj1);
// echo "<br>";
// echo print_r($obj2);


// Copy by Value
$obj2 = clone $obj1;
$obj1->school="St Marys";
$obj2->grade=8;
echo print_r($obj1);
echo "<br>";
echo print_r($obj2);
?>