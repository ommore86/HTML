<?php
class Add
{
    function __call($name, $args)
    {
        if($name=="add")
        {
            switch(count($args))
            {
                case 1:
                    return "Passed one argument";
                    break;
                case 2:
                    return "Passed two argument";
                    break;
                case 3:
                    return "Passed three argument";
                    break;
                case 4:
                    return "Passed four argument";
                    break;
                default:
                    return "Error! Pass 0 to 4 arguments";
                    break;
            }
        }
    }
}

$obj = new Add();
echo $obj->add("Yes", "No");
?>