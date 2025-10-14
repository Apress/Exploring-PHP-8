<?php

class Treasure {}
class Party {}
class Dungeon {}

function delve(Party $party, Dungeon $dungeon): Treasure
{
    // adventures go here
    return new Treasure();
}

$refFunc = new ReflectionFunction('delve');

print "Function {$refFunc->getName()}() ".
    "should be called with parameters..." . PHP_EOL;

foreach ($refFunc->getParameters() as $param) {
    print $param->getType()->getName() . ': ';
    print '$'. $param->getName() . PHP_EOL;
}

print PHP_EOL;

var_dump($refFunc->invoke(new Party, new Dungeon));
