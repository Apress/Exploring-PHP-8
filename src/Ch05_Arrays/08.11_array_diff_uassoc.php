<?php

$car1 = [
    'make' => 'VW',
    'model' => 'Golf',
    'variant' => 'GTI',
    'colour' => 'Oak Green',
];

$car2 = [
    'X_MAKE' => 'VW',
    'X_MODEL' => 'Golf',
    'X_VARIANT' => 'GTI 16v',
    'X_COLOUR' => 'Oak Green',
];

print_r(array_diff_uassoc($car1, $car2, 'keyComparison'));

function keyComparison ($k1, $k2) {
    return strcasecmp($k1, ltrim($k2, 'X_'));
}
