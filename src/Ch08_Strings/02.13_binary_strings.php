<?php

var_dump("a string" === b'a string');

$str = <<<STR
a string
STR;

var_dump($str === b'a string');
