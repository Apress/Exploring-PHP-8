<?php

$largeNum = (string) PHP_INT_MAX;
$largeNum .= '00000000000000000000';
var_dump($largeNum - 1);

$veryLargeNum = $largeNum . str_repeat('0000000000', 30);
var_dump($veryLargeNum + 1);
