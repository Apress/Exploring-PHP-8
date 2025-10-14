<?php

$tstamp = mktime(
    hour: 25,
    day: 10,
);
print date('d H', $tstamp) . PHP_EOL;

$tstamp = mktime(
    hour: 12,
    minute: 61,
);
print date('H:i', $tstamp);

print PHP_EOL;