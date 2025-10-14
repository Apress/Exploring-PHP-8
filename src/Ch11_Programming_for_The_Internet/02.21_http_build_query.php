<?php

$data = [
    'cats' => ['Jess'],
    'humans' => ['Anna', 'Paul']
];

print http_build_query($data) . PHP_EOL;
print urldecode(http_build_query($data));

print PHP_EOL;
