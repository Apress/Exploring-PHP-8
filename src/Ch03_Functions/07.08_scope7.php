<?php

function getCount(): int
{
    if (!isset($counter)) {
        $counter = 0;
    }

    return $counter++;
}

print getCount() . PHP_EOL;
print getCount() . PHP_EOL;
