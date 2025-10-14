<?php

abstract class Car
{
    abstract public function getBrand(): string;

    abstract public function getModel(): string;
}

class VwGolf extends Car
{
    public function getBrand(): string
    {
        return 'Volkswagen';
    }

    public function getModel(): string
    {
        return 'Golf GTI';
    }
}

function carInfo(Car $car) {
    print "{$car->getBrand()} {$car->getModel()}" . PHP_EOL;
}

carInfo(new VwGolf());
//carInfo(new Car());
