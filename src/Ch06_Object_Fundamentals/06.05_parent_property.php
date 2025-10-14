<?php

class Vehicle
{
    protected static string $iAm = 'Vehicle';
}

class Car extends Vehicle
{
    protected static string $iAm = 'Car';

    public static function whatAmI(): void
    {
        print "I am a " . self::$iAm . PHP_EOL;
        print "I am also a " . parent::$iAm . PHP_EOL;
    }
}

Car::whatAmI();
