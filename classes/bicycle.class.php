<?php 

class Bicycle
{

    public static $instance_count = 0;

    public $brand;
    public $model;
    public $year;
    public $category; 
    public $description = "used bicycle";

    private $weight_kg = 0.0;
    protected static $wheels = 2;

    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    public static function create()
    {
        $classs_name  = get_called_class(); // must retrieve string first
        $obj = new $classs_name;            // "new" expects a class or a 

        // $obj = new static              // self & static work here too!
        self::$instance_count++;
        return $obj;
    }


    function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public static function wheel_details()
    {
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels  . " wheels";
        return "It has " . $wheel_string . ".";
    }

    function weight_kg()
    {
        return $this->weight_kg . ' kg';
    }

    function set_weight_kg($value)
    {
        $this->weight_kg = floatval($value);
    }

    function weight_lbs()
    {
        $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
        return $weight_lbs . ' lbs';
    }
    function set_weight_lbs($value)
    {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}