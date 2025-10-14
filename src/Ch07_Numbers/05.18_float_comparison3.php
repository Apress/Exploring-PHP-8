<?php

$a = PHP_FLOAT_MAX;
//   1.7976931348623157E+308 = PHP_FLOAT_MAX (64bit)
$b = 1.7976931348623156E+308;

if (
    abs($a - $b) <= PHP_FLOAT_EPSILON * $a  &&
    abs($a - $b) <= PHP_FLOAT_EPSILON * $b
) {
    print "Two largest floats are equivalent" . PHP_EOL;
}