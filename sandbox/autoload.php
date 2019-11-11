<?php

function my_autoload($class_name)
{
    if (preg_match('//', $class_name)) {
        // suppose that class are in classes directory with '.class.php' at their ends
        include 'classes/' . $class_name . ".class.php";
    }
}

spl_autoload_register('my_autoload');

$bike = new Bicycle;
$bike->brand = "trick<br>";
echo $bike->brand;

$b2 = new Unicycle;
$b2->brand = "clown brand<br>";
echo $b2->brand;
