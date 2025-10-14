<?php

function sayHi(): string
{
    return "Hi there!"; // valid return
}

function getPi(): float
{
    return '3.14159265'; // can cast to a float so also valid
}

function getNow(): DateTime // function returns an instance of this class.
{
    return new DateTime('now');
}

function getMorePi(): float
{
    return 'Three point one four etc. etc.'; // Throws a TypeError
}

print sayHi() . PHP_EOL;
var_dump(getPi());
var_dump(getNow());
print getMorePi();

