<?php

print_r(array_intersect([1, 2, 3], ['3', 2, '1']));
print_r(array_intersect(
    ['make' => 'VW', 'model' => 'Golf'],
    ['model' => 'Golf', 'make' => 'VW'],
));
