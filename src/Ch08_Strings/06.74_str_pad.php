<?php

$str1 = "First";
$str2 = "Second";

print str_pad($str1, 6) . $str2 . PHP_EOL;

print PHP_EOL;

print str_pad($str1, 11, ',.,', STR_PAD_BOTH) . $str2 . PHP_EOL;

print PHP_EOL;
