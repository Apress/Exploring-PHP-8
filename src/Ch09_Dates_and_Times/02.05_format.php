<?php

$dt = new DateTime('01-SEP-2024');
// year
print $dt->format('Y y') . PHP_EOL;
// month
print $dt->format('F M m n') . PHP_EOL;
// day
print $dt->format('l D d j jS');

print PHP_EOL;
print PHP_EOL;

$dt = new DateTime('3rd September 2024 18:11:17');
// hour
print $dt->format('H h g hA ga') . PHP_EOL;
// minutes and seconds
print $dt->format('i s') . PHP_EOL;
//timezone and UTC offset - will vary with system settings if not explicitly
//specified at construction.
print $dt->format('T O');

print PHP_EOL;
print PHP_EOL;

print $dt->format('l, F jS, Y') . PHP_EOL;
print $dt->format('i:s i,s');

print PHP_EOL;
