<?php

$arr = ['Alice', 'Bob', 'Bob'];

$struct = [
    ['Skoda', 'Fabia', 'VRs'],
    ['Skoda', 'Fabia', 'VRs'],
];

print_r(array_count_values($arr));
print_r(array_count_values($struct));
