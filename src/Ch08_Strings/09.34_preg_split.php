<?php

$text = 'We just, want.the - words...from-this??string.';
print_r(preg_split("/[^a-zA-Z]+/", $text));

print PHP_EOL;

print_r(preg_split("/[^a-zA-Z]+/", $text, flags: PREG_SPLIT_NO_EMPTY));

print PHP_EOL;
