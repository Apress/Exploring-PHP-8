<?php

$car = [
    'make' => 'VW',
    'model' => 'Golf',
    'variant' => 'GTI 8v',
    'colour' => 'Oak Green',
];

$newCars = [];
$newKeys = array_keys($car);
shuffle($newKeys);

foreach ($newKeys as $k) {
    $newCars[$k] = $car[$k];
}

print_r($newCars);
