<?php

$a = 0.8;
$b = 0.1 + 0.7;
$absoluteDiff = abs($a - $b);

if ($absoluteDiff < PHP_FLOAT_EPSILON) {
    print "Float values are equivalent..." . PHP_EOL;
    var_dump(PHP_FLOAT_EPSILON);
    var_dump($absoluteDiff);
}
