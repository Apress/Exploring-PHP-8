<?php

$format = 'Y-m-d H:i:s';

$tstamp = mktime(
    hour: 0,
    minute: null,
    second: 0,
    month: null,
    day: null,
    year: 2001
);

print date($format, $tstamp);

print PHP_EOL;
