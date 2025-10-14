<?php

$largeNum = (string) PHP_INT_MAX;
$largeNum .= '00000000000000000000';
$largerNum = $largeNum . '0';

var_dump(bcadd($largeNum, $largeNum));
var_dump(bcdiv($largeNum, 11));
var_dump(bcdiv($largeNum, 11, 4));
var_dump(bcmod($largeNum, 11));
var_dump(bcpow($largeNum, 2));

var_dump(bccomp($largeNum, $largeNum));
var_dump(bccomp($largeNum, $largerNum));
var_dump(bccomp($largerNum, $largeNum));

// BC Math handles decimal point numbers
var_dump(bcadd('100.01', '100.02', 2));

bcscale(1); // we need everything to 1 d.p. for the next calls
// Remember 0.1 + 0.7 != 0.8 in floating point arithmetic?
$trickyFloat = bcadd('0.1', '0.7');
var_dump(bccomp($trickyFloat, '0.8')); // now it does!