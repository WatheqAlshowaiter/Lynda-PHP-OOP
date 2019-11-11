<?php

class User
{
    var $isAdmin = false; 
    var $first_name;
    var $last_name;
    var $username;

    function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

class Customer extends User
{
    var $city = "New York";
    var $state = "New York";
    var $country = "USA";

    function location()
    {
        return $this->city . " " . $this->state . " " . $this->country;
    }
}

class AdminUser extends User{
    var $isAdmin = true; 

    function full_name()
    {
        return $this->first_name . " " . $this->last_name . " [Admin]";
    }

}

$u = new User;
$u->first_name = 'Jerry';
$u->last_name = 'Seinfeld';
$u->username = 'jseinfeld';

$c = new Customer;
$c->first_name = "Tome";
$c->last_name = "Simpson";
$c->username = "Tsimp";

echo $u->full_name() . '<br />';;
echo $c->full_name() . '<br />';;

echo "parent for User: ", get_parent_class($u) . '<br />';
echo "parent for Customer: ", get_parent_class($c) . '<br />';


if (is_subclass_of($c, "User")) {
    echo "Instance is a subclass of User.<br />";
}

$parents = class_parents($c);
echo implode(", ", $parents);
