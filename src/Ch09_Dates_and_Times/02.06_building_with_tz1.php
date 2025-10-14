<?php

$dt = new DateTime('Tuesday, 03-Sep-2024 05:00:00 PDT');
print $dt->format('Y-m-d H:i:s T') . PHP_EOL;
print $dt->format('Y-m-d H:i:s O') . PHP_EOL;

print PHP_EOL;

var_dump($dt->getTimezone());
