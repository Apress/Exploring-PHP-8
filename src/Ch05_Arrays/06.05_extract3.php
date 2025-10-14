<?php

$name = 'Alice';
$arr = [
    'name' => 'Bob',
];
extract($arr, EXTR_SKIP, 'new');
print "\$name: {$name}" . PHP_EOL;
