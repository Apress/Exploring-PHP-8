<?php

$decimalDigits = 2;
$decSep = '.';
$thousandsSep = '_';

print number_format(
    1000000000.888,
    $decimalDigits,
    $decSep,
    $thousandsSep
);
