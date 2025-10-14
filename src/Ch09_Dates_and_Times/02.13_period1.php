<?php

$bellRiots = DateTime::createFromFormat(
    'Y-m-d H:i:s O',
    '2024-09-01 00:00:00 PST'
);
$retakeSanctuary = DateTime::createFromFormat(
    'Y-m-d H:i:s O',
    '2024-09-03 05:00:00 PST'
);

$period = new DatePeriod(
    $bellRiots,
    new DateInterval('PT12H'),
    $retakeSanctuary
);

foreach ($period as $date) {
    echo $date->format(DateTimeImmutable::COOKIE) . PHP_EOL;
}

print PHP_EOL;
