<?php


class Student
{ }

$classes = get_declared_classes();

echo "Classes: " . implode(", ", $classes) . "<br>";

$classes_name = ['Student', 'profile', 'student'];

foreach ($classes_name as $class_name) {
    if (class_exists($class_name)) {
        echo "{$class_name} is a declared class <br>";
    } else { 
        echo "{$class_name} is a not declared class<br>";
    }
}
