<?php

$bellRiots = DateTime::createFromFormat(
    'Y-m-d H:i:s O',
    '2024-09-01 00:00:00 PST'
);
print $bellRiots->format(DateTime::COOKIE) . PHP_EOL;

$retakeSanctuary = DateTime::createFromFormat(
    'Y-m-d H:i:s O',
    '2024-09-03 05:00:00 PST'
);
print $retakeSanctuary->format(DateTime::COOKIE) . PHP_EOL;

$dti = $bellRiots->diff($retakeSanctuary);
print "Diff is {$dti->d} days, {$dti->h} hours";

print PHP_EOL;
print PHP_EOL;

print $dti->format("Y-m-d H:i:s") . PHP_EOL;
print $dti->format("%Y-%m-%d %H:%i:%s");

print PHP_EOL;
