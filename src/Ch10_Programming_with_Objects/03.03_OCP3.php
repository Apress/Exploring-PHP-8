<?php

interface Vehicle
{
    public function getMaxPassengers(): int;
}

class Train implements Vehicle
{
    public function __construct(private int $carriages)
    {
    }

    public function getMaxPassengers(): int
    {
        return $this->carriages * 30;
    }
}

$train = new Train(6);
print "This train can carry {$train->getMaxPassengers()} people" . PHP_EOL;
