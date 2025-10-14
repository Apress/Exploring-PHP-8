<?php

$num = -9223372036854775745;

print decbin($num) . PHP_EOL;
print decbin($num << 1) . PHP_EOL;
print decbin($num >> 1) . PHP_EOL;
var_dump($num << 1);
var_dump($num >> 1);