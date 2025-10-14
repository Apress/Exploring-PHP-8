<?php

class Vehicle
{
    protected int $maxPassengers = 0;

    public function getMaxPassengers(): int
    {
        return $this->maxPassengers;
    }
}

class Car extends Vehicle
{
    protected int $maxPassengers = 4;
}

class Motorbike extends Vehicle
{
    protected int $maxPassengers = 2;
}

$car = new Car();
$bike = new Motorbike();

print "A car can carry {$car->getMaxPassengers()} people" . PHP_EOL;
print "A motorbike can carry {$bike->getMaxPassengers()} people" . PHP_EOL;
