<?php

function getCount(): int
{
    static $counter = 0;

    return $counter++;
}

print getCount() . PHP_EOL;
print getCount() . PHP_EOL;
print $counter . PHP_EOL;
