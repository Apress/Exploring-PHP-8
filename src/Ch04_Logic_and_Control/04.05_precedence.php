<?php

function getTrue(): bool
{
    print __FUNCTION__ . PHP_EOL;
    return true;
}
function getFalse(): bool
{
    print __FUNCTION__ . PHP_EOL;
    return false;
}

$bool = getTrue() and getFalse();
var_dump($bool);

print PHP_EOL;

$bool = getTrue() && getFalse();
var_dump($bool);