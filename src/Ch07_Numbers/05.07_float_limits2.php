<?php

//var_dump(PHP_FLOAT_DIG);
//$num = 0.000000000000000123456;
//var_dump($num);

$num = 1234567890123456; // 1.234567890123456 x 10 ** 15 fifteen decimal digits
$floatNum = (float) $num;
var_dump($num); // int(1234567890123456)
var_dump($floatNum); // float(1234567890123456)
var_dump((int) $floatNum); // int(1234567890123456)

$num = 12345678901234567; // 1.2345678901234567 x 10 ** 15 sixteen decimal digits
$floatNum = (float) $num;
var_dump($num); // int(12345678901234567)
var_dump($floatNum); // float(12345678901234568)
var_dump((int) $floatNum); // int(12345678901234568) rounding error is present
