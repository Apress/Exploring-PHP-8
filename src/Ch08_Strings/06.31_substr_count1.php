<?php

$sayHello = 'hello hello hello';
var_dump(substr_count($sayHello, 'hello'));
var_dump(substr_count($sayHello, 'll'));
var_dump(substr_count($sayHello, 'l'));

var_dump(substr_count("a\x00 a\x00 a\x00", "\x00"));
var_dump(substr_count("a\x00 a\x00 a\x00", 'a'));
