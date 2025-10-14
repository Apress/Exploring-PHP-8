<?php

abstract class Car
{
    protected static $noise = 'VRRRRM!';

    public function beepHorn(): void
    {
        print "Beep beep!" . PHP_EOL;
    }

    abstract public function makeNoise(): void;
}

class VwGolf extends Car{
    public function makeNoise(): void
    {
        print self::$noise . PHP_EOL;
    }
}

$car = new VwGolf();
$car->makeNoise();
$car->beepHorn();
