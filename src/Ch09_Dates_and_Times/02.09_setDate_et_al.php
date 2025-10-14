<?php

$dti = new DateTimeImmutable('@1725148800');
print $dti->format(DateTime::COOKIE) . PHP_EOL;

print $dti->setDate(2024, 9, 3)
    ->format(DateTime::COOKIE) . PHP_EOL;

print $dti->setTimeZone(new DateTimeZone('PST'))
    ->setISODate(2024, 36, 2)
    ->setTime(5, 0)
    ->format(DateTime::COOKIE) . PHP_EOL;

print $dti->setTimestamp(1725368400)
    ->setTimezone(new DateTimeZone('PST'))
    ->format(DateTime::COOKIE);

print PHP_EOL;
