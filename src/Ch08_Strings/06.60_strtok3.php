<?php

$query = 'foo=b=ar&ca&t=miaow&dog=bark';
$delims = ['=', '&'];
$index = 0;

$token = strtok($query, $delims[$index]);

while ($token !== false) {
    print "{$token}\n";
    $index = !$index % 2;
    $token = strtok($delims[$index]);
}

print PHP_EOL.PHP_EOL;

$token = strtok($query, '&=');
while ($token !== false) {
    print "{$token}\n";
    $token = strtok('&=');
}