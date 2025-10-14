<?php

$largeFloat = PHP_FLOAT_MAX;

var_dump($largeFloat + 1);
var_dump($largeFloat + 1E291);
var_dump($largeFloat + 1E292);
