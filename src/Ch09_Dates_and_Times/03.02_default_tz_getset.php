<?php

date_default_timezone_set('America/Los_Angeles');
$dt = new DateTime('2024-09-01');
print $dt->format('Y-m-d H:i:s T') . PHP_EOL;

date_default_timezone_set('Europe/London');
$dt = new DateTime('2024-09-01');
print $dt->format('Y-m-d H:i:s T');

print PHP_EOL;
