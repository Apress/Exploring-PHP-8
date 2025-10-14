<?php
declare(strict_types=1);

function countAndIterate(ArrayAccess&Countable $data)
{
    print "Data contains " . count($data) . " things:" . PHP_EOL;

    foreach ($data as $datum) {
        var_dump($datum);
    }
}

$obj = new ArrayObject([
    'a car',
    'a guitar',
    'and a nice cold pint',
]);

countAndIterate($obj);