<?php

$largeFloat = PHP_FLOAT_MAX + 1E292;

var_dump($largeFloat);
var_dump(is_numeric($largeFloat));
var_dump(is_infinite($largeFloat));
var_dump($largeFloat - PHP_FLOAT_MAX);
var_dump($largeFloat / PHP_FLOAT_MAX);
var_dump($largeFloat / $largeFloat);
var_dump($largeFloat / (PHP_FLOAT_MAX + 1E292));
