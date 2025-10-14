<?php

trait Engine
{
    protected int $fuelLevel = 0;
}

class Rocket
{
    use Engine;
}

class SaturnFive extends Rocket
{
    protected int $fuelLevel = 500_000;
}
