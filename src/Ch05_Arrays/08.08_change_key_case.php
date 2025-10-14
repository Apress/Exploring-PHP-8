<?php

$car1 = [
    'make' => 'VW',
    'model' => 'Golf',
    'variant' => 'GTI',
    'colour' => 'Oak Green',
];

$car2 = [
    'make' => 'VW',
    'model' => 'Golf',
    'variant' => 'GTI 16v',
    'COLOUR' => 'Oak Green',
];

$car2 = array_change_key_case($car2, CASE_LOWER);

print_r($car2);
print_r(array_diff_assoc($car1, $car2));
