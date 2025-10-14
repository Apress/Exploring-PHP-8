<?php

var_dump((int) 'speed: 100.1 mph'); // alphabet characters encountered first
var_dump((int) '100.1 mph'); // decimal point ignored
var_dump((float) "\t 100.1 mph"); // decimal point included
var_dump((float) '1,000,000'); // decimal 1000000 in common format
var_dump((int) '1f'); // hexadecimal 31
var_dump((int) 'ff'); // hexadecimal 255
var_dump((int) '0xff'); // same but using common hex notation
var_dump((int) '1111'); // binary 16
var_dump((int) '012'); // octal 10