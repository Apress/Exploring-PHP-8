<?php

$name = 'Alice';
$arr = [
    'name' => 'Bob'
];
extract($arr); // $name will be overwritten
print "\$name: {$name}" . PHP_EOL;

$name = 'Alice';
$arr = [
    'name' => 'Russell'
];
extract($arr, EXTR_PREFIX_IF_EXISTS, 'new');
print "\$name: {$name}" . PHP_EOL; // $name is untouched
print "\$new_name: {$new_name}" . PHP_EOL; // $new_name is created to avoid overwriting $name
