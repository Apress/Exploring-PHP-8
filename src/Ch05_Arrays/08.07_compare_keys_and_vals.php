<?php

$car1 = [
    'make' => 'VW',
    'model' => 'Golf',
    'variant' => 'GTI 8v',
    'colour' => 'Oak Green', // car nerds: there was a limited run of 8v GTIs in this colour ;)
];

$car2 = [
    'make' => 'VW',
    'model' => 'Golf',
    'variant' => 'GTI 16v',
    'COLOUR' => 'Oak Green',
];

print_r(array_diff_assoc($car1, $car2));
print_r(array_intersect_assoc($car1, $car2));
