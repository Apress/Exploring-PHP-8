<?php

$car1 = ['make' =>  'VW', 'model' =>  'Golf'];
$car2 = ['make' =>  'VW'];

print_r(array_intersect_key($car1, $car2));
print_r(array_diff_key($car1, $car2));
