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

function useVehicle(Vehicle $vehicle): void
{
    print "This vehicle can carry {$vehicle->getMaxPassengers()} people" . PHP_EOL;
}

useVehicle(new Vehicle());
useVehicle(new Car());