<?php

$motorways = ['M1', 'M11', 'M6', 'M20', 'M4', 'M23'];

sort($motorways, SORT_STRING);
print "String sort: " . getMotorways($motorways) . "\n";

natsort($motorways);
print "Natural sort: " . getMotorways($motorways) . "\n";

function getMotorways (array $motorways): string {
    $str = '';

    foreach ($motorways as $m) {
        $str .= "$m, ";
    }

    return rtrim($str, ', ');
};