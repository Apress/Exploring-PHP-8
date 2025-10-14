<?php

$str = '65535';
$int = 65535;

var_dump(dechex($int));

$byte1 = dechex(ord('6'));
$byte2 = dechex(ord('5'));
$byte3 = dechex(ord('5'));
$byte4 = dechex(ord('3'));
$byte5 = dechex(ord('5'));

var_dump($byte1 . $byte2 . $byte3 . $byte4 . $byte5);

//base_convert('3635353335', 16, 10);
