<?php

var_dump(microtime());
var_dump(microtime(true));

print PHP_EOL;

$start = microtime(true);
sleep(2);
$end = microtime(true);
print "Time elapsed : " . $end - $start . "s";

print PHP_EOL;
