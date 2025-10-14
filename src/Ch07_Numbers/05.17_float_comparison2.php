<?php

$a = PHP_FLOAT_MAX;
//   1.7976931348623157E+308 = PHP_FLOAT_MAX (64bit)
$b = 1.7976931348623156E+308;

var_dump(abs($b - $a)); // absolute
var_dump(abs(($a - $b)/$b)); // relative
var_dump(PHP_FLOAT_EPSILON);

//print PHP_EOL;
//
//$a = PHP_FLOAT_MIN;
////   2.2250738585072014E-308  = PHP_FLOAT_MIN (64bit)
//$b = 2.2250738585072017E-308;
//
//var_dump(abs($b - $a)); // absolute
//var_dump(abs(($b - $a)/$a)); // relative
//var_dump(PHP_FLOAT_EPSILON);