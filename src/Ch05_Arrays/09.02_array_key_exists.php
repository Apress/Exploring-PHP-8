<?php

$amps = [
    'Marshall' => 'EL34',
    'Fender' => '6V6'
];

if (array_key_exists('Marshall', $amps)) {
    print "Big bottle amps FTW!" . PHP_EOL;
}
