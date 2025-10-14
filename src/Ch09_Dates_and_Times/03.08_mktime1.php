<?php

$format = 'Y-m-d H:i:s';

$tstamp1 = mktime(0);
$tstamp2 = mktime(0, 0);
$tstamp3 = mktime(0, 0, 0);

print date($format, $tstamp1) . PHP_EOL;
print date($format, $tstamp2) . PHP_EOL;
print date($format, $tstamp3);

print PHP_EOL;
