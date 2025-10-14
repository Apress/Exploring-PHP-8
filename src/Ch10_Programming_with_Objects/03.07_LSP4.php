<?php

class Vehicle
{
    protected int $maxPassengers = 0;

    public function getMaxPassengers()
    {
        return $this->maxPassengers;
    }
}

class Car extends Vehicle
{
    protected int $maxPassengers = 4;
    public function getMaxPassengers($behaviour)
    {
        switch ($behaviour) {
            case 'int':
                return $this->maxPassengers;
                break;
            case 'string':
                $formatter = new NumberFormatter('en', NumberFormatter::SPELLOUT);
                return $formatter->format($this->maxPassengers);
        }
    }
}

$car = new Car();

var_dump($car->getMaxPassengers('int'));