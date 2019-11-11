<?php

class Student
{ 
    var $first_name; 
    var $last_name; 
    var $contry = 'None'; 
}

$student1 = new Student;
$student2 = new Student;

$student1->first_name = "Ali";
$student1->last_name = "Ahmed";

$student2->first_name = "Arwa";
$student2->last_name = "Khaled";



echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

$class_vars = get_class_vars("Student");

echo "Class vars:<br />";
echo "<pre>";   
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);
echo "Object vars:<br />";
echo "<pre>";
print_r($object_vars);
echo "</pre>";


if(property_exists('Student', 'first_name')) {
    echo "Property first_name exists in Student class.<br />";
  } else {
    echo "Property first_name does not exist in Student class.<br />";
  }