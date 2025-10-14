<?php

$myArr1 = ["Alice", "Bob", "Russell"];
$myArr2 = ["Alice", "Bob", "Russell"];

unset($myArr1[1]);
print_r($myArr1);

$myArr1 = array_values($myArr1);
print_r($myArr1);

array_splice($myArr2, 0, 1);
print_r($myArr2);
