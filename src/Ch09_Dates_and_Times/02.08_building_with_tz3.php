<?php

var_dump(date_default_timezone_get());
$dt = new DateTime('@1725148800');
print $dt->format('T') . PHP_EOL;

$dt = new DateTime('2024-09-01');
print $dt->format('T');

print PHP_EOL;
