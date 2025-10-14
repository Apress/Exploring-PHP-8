<?php

trait Engine
{
    protected int $fuelLevel = 0;
}

class SaturnFive
{
    use Engine;

    protected int $fuelLevel = 500_000;
}