<?php
declare(strict_types=1);

function countAndIterate((ArrayAccess&Countable)|array $data)
{
    print "Data contains " . count($data) . " things:" . PHP_EOL;

    foreach ($data as $datum) {
        var_dump($datum);
    }
}
$niceThings = [
    'a car',
    'a guitar',
    'and a nice cold pint',
];

countAndIterate(new ArrayObject($niceThings));
countAndIterate($niceThings);
