<?php

$query = 'foo=bar&cat=miaow&dog=bark';
$delims = ['=', '&'];
$index = 0;

$token = strtok($query, $delims[$index]);

while ($token !== false) {
    print "{$token}\n";
    $index = !$index % 2;
    $token = strtok($delims[$index]);
}
