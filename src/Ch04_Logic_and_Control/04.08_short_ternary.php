<?php

$test = 'something';
$val = ($test) ?: 'default';
var_dump($val);

print PHP_EOL;

var_dump(
    false ?: null ?: 0 ?: '0' ?: 'default'
);