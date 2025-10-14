<?php

$intString = '12345';
$fltString = '123.4';
$num = 1;

$intString = +$intString;
$fltString = +$fltString;
$num = -$num;

var_dump($intString);
var_dump($fltString);
var_dump($num);
