<?php

$tstamp = mktime(
    hour: -1,
    day: 10,
);
print date('d H', $tstamp);

print PHP_EOL;

$tstamp = mktime(
    hour: 12,
    minute: -10,
);
print date('H:i', $tstamp);

print PHP_EOL;
