<?php

class Vehicle
{
    public function __construct(
        protected int $maxPassengers
    ) {
    }
}

class Train extends Vehicle
{
    public function __construct(int $carriages)
    {
        parent::__construct($carriages * 30);
    }

    public function getMaxPassengers(): int
    {
        return $this->maxPassengers;
    }
}

$train = new Train(4);
print "This train can carry {$train->getMaxPassengers()} passengers.\n";
