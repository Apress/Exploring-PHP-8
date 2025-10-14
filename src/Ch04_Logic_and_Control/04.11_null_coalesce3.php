<?php

$val1 = 'something';
$val2 = null;

$val1 ??= 'new val';
$val2 ??= 'new val';

var_dump($val1);
var_dump($val2);
