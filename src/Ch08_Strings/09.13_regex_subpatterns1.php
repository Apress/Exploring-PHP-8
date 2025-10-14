<?php

$text = 'brown bread, green apples, orange er... oranges';
preg_match_all('/(brown|green) apples/', $text, $matches);
print_r($matches);

print PHP_EOL;

preg_match_all('/(brown|green) (bread|apples)/', $text, $matches);
print_r($matches);
