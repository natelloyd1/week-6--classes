<?php

declare(strict_types=1);

class Car {

    public function __construct(string $getNumberplate, string $getMake, string $getMileage)
    {
        $this->getNumberplate = $getNumberplate;
        $this->getMake = $getMake;
        $this->getMileage = $getMileage; 
    }
    public function getNumberplate() : string 
    {
      return $this->getNumberplate;
    }

    public function getMake() : string 
    {
      return $this->getMake;
    }
    public function getMileage() : string 
    {
      return $this->getMileage;
    }
};

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"
var_dump($car->getMileage()); // int(0)

// you can add journey
$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);
var_dump($car->getMileage()); // int(300)