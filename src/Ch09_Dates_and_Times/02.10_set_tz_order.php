<?php

$dti = new DateTimeImmutable('@1725148800');

$new1 = $dti->setTimeZone(new DateTimeZone('PST'))
    ->setISODate(2024, 36, 2)
    ->setTime(5, 0);

$new2 = $dti->setISODate(2024, 36, 2)
    ->setTime(5, 0)
    ->setTimeZone(new DateTimeZone('PST'));

print $new1->format(DateTime::COOKIE) . PHP_EOL;
print $new2->format(DateTime::COOKIE);

print PHP_EOL;
