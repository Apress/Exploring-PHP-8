<?php

class Magician
{
    public function debug(): void
    {
        print __CLASS__ . PHP_EOL;
        print __METHOD__ . PHP_EOL;
    }
}

class Quentin extends Magician
{
}

$magician = new Quentin();
$magician->debug();
