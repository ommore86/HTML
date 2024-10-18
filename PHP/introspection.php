<?php
class test
{
    public $a = 10;
    function show()
    {
        echo $a;
    }
}
$obj = new test();

// class_exists()
if(class_exists("test"))
{
    echo "Class exists";
}
else
{
    echo "Class does not exists";
}
echo "<br><br>";

// get_class()
echo get_class($obj);
echo "<br><br>";

// get_declared_classes()
// $a = get_declared_classes();
// print_r($a);
// echo "<br><br>";

// get_class_methods()
$a = get_class_methods("test");
print_r($a);
echo "<br><br>";

// get_class_vars()
$a = get_class_vars("test");
print_r($a);
echo "<br><br>";

// method_exists()
$a = method_exists($obj, "show");
print $a;
?>