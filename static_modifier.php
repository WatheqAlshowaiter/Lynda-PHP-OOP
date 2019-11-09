<?php

class Student
{
    public static $grades = ['freshman', 'somophor', "Junior", "Senior"];
    private static $total_students =  0;

    public static function motto()
    {
        return "To learn PHP OOP";
    }

    public static function count()
    {
        return self::$total_students;
    }

    public static function add_students()
    {
        self::$total_students++;
    }
}

echo Student::$grades[0] . "<br>";
echo Student::motto() . "<br>";

// echo Student::$total_students . "<br>";// ERROR 
echo "Students count before: " .  Student::count() . "<br>";
Student::add_students();
echo "Students count after: " .  Student::count() . "<br>";
