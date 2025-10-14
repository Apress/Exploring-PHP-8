<?php

$str = '65535';
$int = 65535;

var_dump($str);
var_dump($int);

var_dump($int . ' is the largest 16-bit unsigned int.'); // . means 'concatenate these strings'.
var_dump($str + 1); // + means "add these two numbers together".

//var_dump(base_convert($str, 10, 2));
//var_dump(base_convert($str, 10, 16));
