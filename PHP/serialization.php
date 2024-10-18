<?php
$s_data = serialize(array("Welcome", "to", "India"));
print_r($s_data);
echo "<br><br>";

$us_data = unserialize($s_data);
print_r($us_data);
echo "<br><br>";


$s1_data = serialize(array("Welcome", 3.14, "to", 33, array("yes", false, 1), "India"));
print_r($s1_data);
echo "<br><br>";

$us1_data = unserialize($s1_data);
print_r($us1_data);
?>