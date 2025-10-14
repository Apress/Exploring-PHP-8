<?php

$dt = new DateTimeImmutable('@1725148800');
print $dt->format(DateTime::COOKIE) . PHP_EOL;

print $dt->add(new DateInterval("P1D"))
    ->format(DateTime::COOKIE) . PHP_EOL;

print $dt->add(new DateInterval("P1Y1D"))
    ->format(DateTime::COOKIE);

print PHP_EOL;
print PHP_EOL;

print $dt->add(new DateInterval("PT5H10M20S"))
    ->format(DateTime::COOKIE) . PHP_EOL;

print $dt->add(new DateInterval("P3DT5H"))
    ->format(DateTime::COOKIE);

print PHP_EOL;
