<?php

$text = 'The goldfish overtook the shark.';
$patterns = [
    '/(goldfish)/',
    '/(nimble)/'
];
$replacements = [
    'nimble ${1}',
    '${1}, quick',
];
print preg_filter($patterns, $replacements, $text);

print PHP_EOL;

$replacements = ['nimble ${1}'];
print preg_filter($patterns, $replacements, $text);

print PHP_EOL;
