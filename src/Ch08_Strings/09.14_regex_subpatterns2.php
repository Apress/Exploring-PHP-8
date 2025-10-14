<?php

$text = 'bRoWn BrEaD, gReEn aPpLeS, oRanGe eR... OrAnGeS';
preg_match_all('/(?i:brown|green) ((?i)bread|apples)/', $text, $matches);
print_r($matches);

print PHP_EOL;

$text = 'brown bread, green apples, orange er... oranges';
preg_match_all("/(?'colour'brown|green) (?<type>bread|apples)/", $text, $matches);
print_r($matches);
