<?php

class Sofa
{

  public static $instance_count = 0;

  public $seats = 3;
  public $arms = 2;

  public function __construct($args = [])
  {
    // default values, null coalscending 
    $this->seats = $args['seats'] ?? $this->seats;
    $this->arms = $args['arms'] ?? $this->arms;

    self::$instance_count++;
  }

  // no arguments 
  public function __destruct() // executes when unset($obj) or php script ends
  {
    self::$instance_count--;
  }
}

class Couch extends Sofa
{
  var $arms = 0;
}

class Loveseat extends Sofa
{
  var $seats = 2;
}

$sofa = new Sofa(['seats' => 4, 'arms' => 2]);
echo 'Sofa<br />';
echo '- seats: ' . $sofa->seats . '<br />';
echo '- arms: ' . $sofa->arms . '<br />';
echo '<br />';

$couch = new Couch(['seats' => 3]);
echo 'Couch<br />';
echo '- seats: ' . $couch->seats . '<br />';
echo '- arms: ' . $couch->arms . '<br />';
echo '<br />';

unset($sofa); // Instance count: -1 

$loveseat = new Loveseat(['arms' => 0]);

echo 'Loveseat<br />';
echo '- seats: ' . $loveseat->seats . '<br />';
echo '- arms: ' . $loveseat->arms . '<br />';
echo '<br />';

echo 'Instance count: ' . Sofa::$instance_count . '<br />';
