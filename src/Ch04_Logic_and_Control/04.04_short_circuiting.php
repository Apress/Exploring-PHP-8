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

if (getTrue() || getFalse()) {
    print "True!";
}

print PHP_EOL;
