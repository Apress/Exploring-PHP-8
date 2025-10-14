<?php

$arr = [
    'a' => 'Alice',
    'b' => 'Bob',
    'r' => 'Russell',
];

$newArr = array_chunk($arr, 2, true);

print_r($newArr);
