<?php

$myArr1 = ["Alice", "Bob"];
$myArr2 = ["Rita", "Sue", "Russell"];

array_push($myArr1, ...$myArr2);
print_r($myArr1);

//$myOtherArr = ["Russell", "Paul"];
//$myArr = ["Alice", "Bob", ...$myOtherArr];
//var_dump($myArr);