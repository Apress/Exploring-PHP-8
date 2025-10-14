<?php

date_default_timezone_set('UTC');
$tstamp = mktime(
    hour: 5,
    minute: 0,
    second: 0,
    month: 9,
    day: 3,
    year: 2024,
);
var_dump($tstamp);

date_default_timezone_set('America/Los_Angeles');
$tstamp = mktime(
    hour: 5,
    minute: 0,
    second: 0,
    month: 9,
    day: 3,
    year: 2024,
);
var_dump($tstamp);
