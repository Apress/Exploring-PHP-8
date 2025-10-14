<?php

class Vehicle
{
    protected static string $iAm = 'Vehicle';

    public static function whatAmI(): void
    {
        print "I am a " . self::$iAm . PHP_EOL;
    }
}

class Car extends Vehicle
{
    protected static string $iAm = 'Car';
}

Car::whatAmI();
