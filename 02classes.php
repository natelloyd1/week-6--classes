<?php

declare(strict_types=1);

class Light {
    private $turnOn;
    private $turnOff;

    public function __construct(string $turnOff, string $turnOn)
    {
        $this->turnOff = $turnOff;
        $this->turnOn = $turnOn;
    }

    public function turnOff() : string 
    {
      return $this->turnOff;
    }

    public function turnOn() : string 
    {
      return $this->turnOff;
    }
};

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn();
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();
var_dump($lightSwitch->isOn()); // bool(false)