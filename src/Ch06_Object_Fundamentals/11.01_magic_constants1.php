<?php

class Magician
{
    public function debug(): void
    {
        print __CLASS__ . PHP_EOL;
        print __METHOD__ . PHP_EOL;
    }
}

$magician = new Magician();
$magician->debug();
