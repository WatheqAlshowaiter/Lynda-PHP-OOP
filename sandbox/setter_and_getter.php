<?php

class Product
{
    private $price;

    public function set_price($value)
    {
        $no_format = preg_replace('/[\$,]/', '', $value); // omit $ or ,
        $float = floatval($no_format);
        if ($float <= 0) {
            trigger_error("Price must be greater than zero", E_USER_NOTICE);
            return;
        }
        $this->price = $float;
    }
    public function get_price()
    {
        return '$' .  number_format($this->price, 2);
    }
}

$product1 = new Product; 

$product1->set_price('500'); 
echo $product1->get_price(); 

