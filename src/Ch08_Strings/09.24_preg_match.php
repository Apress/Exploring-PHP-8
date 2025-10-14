<?php

$text = 'Cowboy bebop';
preg_match('/\w*bo\w*/', $text, $matches, PREG_OFFSET_CAPTURE, 5);
print_r($matches);

print PHP_EOL;

preg_match('/\w*bo\w*(\d)?/', $text, $matches, PREG_UNMATCHED_AS_NULL);
var_dump($matches);

print PHP_EOL;
