<?php

$a = 'some val';
$b = $a;
$b = 'new val';

var_dump($a);
var_dump($b);

$bref = &$a;
$bref = 'new val';

var_dump($a);
