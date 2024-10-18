<?php
$a = array(2,3,5);
for ($i=0; $i < 3; $i++) { 
    echo "$a[$i]";
}
echo "<br><br>";



$b = array("name"=>"Shruti", "address"=>"Nashik", "age"=>"21", "mobile"=>"7350001222");
echo $b["age"];
echo "<br><br>";



$num_arr = array(array(1,2,3),array(4,5,6),array(7,8,9));
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 3; $j++) { 
        echo $num_arr[$i][$j];
    }
    echo "<br>";
}