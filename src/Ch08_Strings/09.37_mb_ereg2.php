<?php

$text = 'Cowboy bebop';
mb_ereg('(\w*)bo\w*', $text, $matches);
print_r($matches);

print PHP_EOL;

var_dump(mb_ereg('(\w*)bo\w*', $text));