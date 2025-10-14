<?php

$tz = new DateTimeZone('America/Los_Angeles');
$dt = new DateTime('Tuesday, 03-Sep-2024 05:00:00', $tz);
print $dt->format('Y-m-d H:i:s T');

print PHP_EOL;
print PHP_EOL;

$dt = new DateTime('@1725148800', $tz);
print $dt->format('Y-m-d H:i:s T') . PHP_EOL;

$dt = new DateTime('Tuesday, 03-Sep-2024 05:00:00 CET', $tz);
print $dt->format('Y-m-d H:i:s T');

print PHP_EOL;
