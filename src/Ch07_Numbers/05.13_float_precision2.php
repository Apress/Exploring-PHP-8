<?php

$bankBalance = 50.00;
$bankBalance -= 49.95;
$bankBalance -= 0.05;

if ($bankBalance < 0.0) {
    echo "Overdraft fees!" . PHP_EOL;
}

var_dump($bankBalance);
