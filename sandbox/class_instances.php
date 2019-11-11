<?php

class Student
{ }

$student1 = new Student;
$student2 = new Student;


echo get_class($student1) . "<br>";


$classes_name = ['Student', 'profile', 'student'];

foreach ($classes_name as $class_name) {
    if (is_a($student1, $class_name)) {
        echo "student1 is a {$class_name} <br>"; // case insensitive
    } else {
        echo "student1 is not a {$class_name} <br>";
    }
}
