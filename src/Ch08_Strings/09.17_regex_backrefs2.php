<?php

$text = 'hello hello world world';
preg_match_all('/(\w+) \g1/', $text, $matches);
print_r($matches);

print PHP_EOL;

preg_match_all('/(\w+) \g{1}/', $text, $matches);
print_r($matches);

print PHP_EOL;

preg_match_all('/(\w+) \g{-1}/', $text, $matches);
print_r($matches);