<?php

function coinToss(): bool
{
    return (bool) rand(0, 1);
}

$msg = "Today I shall ";
$msg .= (coinToss()) ? "procrastinate." . PHP_EOL : "work on my book!" . PHP_EOL;

print $msg;
