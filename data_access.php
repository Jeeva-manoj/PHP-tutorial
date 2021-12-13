<?php


class Car{

    private $wheels;  // can be accessed only within the class
    public $seats;   // can be accessed from everywhere
    protected $max_speed;  // can be accessed within the class or other classes derived from this class
    static $color = 'Blue';  // can be accessed without creating an instance

}

echo Car::$color;


?>