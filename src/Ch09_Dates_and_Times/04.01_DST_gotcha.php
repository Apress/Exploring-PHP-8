<?php

date_default_timezone_set('Europe/London');

$winterIsComing = new DateTime('26-OCT-2025');
print $winterIsComing->format(DateTime::COOKIE) . PHP_EOL;

$winterIsComing->add(new DateInterval('PT3H'));
print $winterIsComing->format(DateTime::COOKIE);

print PHP_EOL;

$midnight = new DateTime('26-Oct-2025 00:00:00 BST');
$threeHoursLater = new DateTime('26-Oct-2025 02:00:00 GMT');
print $midnight->diff($threeHoursLater)->format('%h hours');

print PHP_EOL;
