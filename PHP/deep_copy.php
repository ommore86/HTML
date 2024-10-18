<?php
class Stud
{
    public $school;
    public $grade;
    public $gender;

    function __construct($s, $g, $gen)
    {
        $this->school = $s;
        $this->grade = $g;
        $this->gender = $gen;
    }

    function __clone()
    {
        $boy = $this->gender->boy;
        $girl = $this->gender->girl;
        $this->gender = new Gender($boy, $girl);
    }
}

class Gender
{
    public $boy;
    public $girl;

    function __construct($b, $g)
    {
        $this->boy = $b;
        $this->girl = $g;
    }
}


$g_obj1 = new Gender(true, false);
$s_obj1 = new Stud("SVVHS", 7, $g_obj1);

echo print_r($s_obj1);
echo "<br>";
echo print_r($g_obj1);
echo "<br><br>";

$obj = clone $s_obj1;
$obj->school = "St Marys";
$obj->gender->boy=false;
$obj->gender->girl=true;
echo print_r($s_obj1);
echo "<br>";
echo print_r($g_obj1);
echo "<br>";
echo print_r($obj);
?>