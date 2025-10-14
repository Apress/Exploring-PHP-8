<?php

class Vehicle
{
    protected int $maxPassengers = 0;

    final public function getMaxPassengers()
    {
        return $this->maxPassengers;
    }
}

class Car extends Vehicle
{
    protected int $maxPassengers = 4;
    public function getMaxPassengers(): int
    {
        return $this->maxPassengers;
    }
}