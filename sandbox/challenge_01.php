<?php

class Bicycle
{

    var $brand;
    var $model;
    var $year;
    var $description = "used bicycle";
    var $weight_kg = 0.0;

    function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }
    function weight_lbs()
    {
        return floatval($this->weight_kg) * 2.2046226218;
    }
    function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
      }
}

$bicycle1 = new Bicycle;

$bicycle1->brand = "Honda";
$bicycle1->model = "3rd model";
$bicycle1->year = "2010";
$bicycle1->description = "yellow good bicycle";

// You can either set value for kg or for pound 
// and the program will calculate the other value
$bicycle1->weight_kg = 10;
$bicycle1->set_weight_lbs(2);

echo "Name: ", $bicycle1->name(), "<br>";


echo "Wight in pound is: ", $bicycle1->weight_lbs() . "<br>";
echo "Wight in Kg is: ", $bicycle1->weight_kg . "<br>";
