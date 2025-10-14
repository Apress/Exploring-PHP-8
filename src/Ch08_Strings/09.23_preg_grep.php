<?php

$text = [
    'Iron Maiden - Somewhere in Time',
    'Iron Maiden - Powerslave',
    'Metallica - Master of Puppets'
];
print_r(preg_grep('/Iron Maiden/', $text));

print PHP_EOL;

print_r(preg_grep('/Iron Maiden/', $text, PREG_GREP_INVERT));
