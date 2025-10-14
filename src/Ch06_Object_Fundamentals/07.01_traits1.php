<?php

trait Engine
{
    protected int $fuelLevel = 0;

    public function printFuelLevel(): void
    {
        print "There are {$this->fuelLevel} litres remaining!" . PHP_EOL;
    }

    public function consumeFuel(int $amount): void
    {
        $this->fuelLevel -= $amount;
    }

    public function refuel(int $fuelAmount): void
    {
        $this->fuelLevel += $fuelAmount;
    }
}

class Car
{
    use Engine;
}

class SpaceShuttle
{
    use Engine;
}

$golf = new Car();
$enterprise = new SpaceShuttle();

$golf->refuel(50);
$enterprise->refuel(18_000_000);

$golf->consumeFuel(10);
$enterprise->consumeFuel(500_000);

$golf->printFuelLevel();
$enterprise->printFuelLevel();
