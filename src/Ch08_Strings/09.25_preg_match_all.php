<?php

$text = 'Cowboy bebop';
preg_match_all('/(\w*)bo\w*/', $text, $matches, PREG_PATTERN_ORDER);
print_r($matches);

print PHP_EOL;

preg_match_all('/(\w*)bo\w*/', $text, $matches, PREG_SET_ORDER);
print_r($matches);

print PHP_EOL;
