<?php

class Vehicle
{
    public function __construct(private string $type)
    {
    }

    public function getMaxPassengers(): int
    {
        switch ($this->type) {
            case 'car':
                return 4;
                break;
            case 'bus':
                return 30;
                break;
            default:
                throw new Exception('unsupported vehicle type');
        }
    }
}