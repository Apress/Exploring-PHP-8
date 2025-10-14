<?php

$text = 'The tortoise overtook the hare.';
$patterns = [
    '/(tortoise)/',
    '/(hare)/'
];
$replacements = [
    'slow ${1}',
    'quick ${1}',
];
print preg_filter($patterns, $replacements, $text);

print PHP_EOL;
