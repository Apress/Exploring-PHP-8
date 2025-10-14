<?php

$test = false;
$val = ($test) ? $test : 'default';
var_dump($val);

print PHP_EOL;

$val = (false) ? 'whatever you like...' : 'this ' . 'could also be ' . 'anything.';
var_dump($val);

print PHP_EOL;
