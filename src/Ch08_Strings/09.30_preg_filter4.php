<?php

$text = [
    'The goldfish swam away from the shark.',
    'The shark ate the goldfish.'
];
$patterns = [
    '/(goldfish)/',
    '/(shark)/'
];
$replacements = [
    'sneaky ${1}',
    'naughty ${1}'
];
print_r(preg_filter($patterns, $replacements, $text));
