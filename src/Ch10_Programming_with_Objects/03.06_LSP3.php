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
    public function getMaxPassengers(): string
    {
        // NumberFormatter requires the intl extension
        $formatter = new NumberFormatter('en', NumberFormatter::SPELLOUT);
        return $formatter->format($this->maxPassengers);
    }
}

$car = new Car();

var_dump($car->getMaxPassengers());