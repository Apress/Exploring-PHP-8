<?php

$invalidDoubleByte = "\xC2\x28";
$validUTF8 = "\u{141}ukasz";

var_dump(ini_get('mbstring.strict_detection'));
var_dump(mb_check_encoding($validUTF8));
var_dump(mb_check_encoding($validUTF8 . $invalidDoubleByte));

mb_internal_encoding("UTF-16BE");  // previous int. enc. was default UTF-8
var_dump(mb_check_encoding($validUTF8));

//var_dump(mb_check_encoding($validUTF8, encoding: 'UTF-16'));

print PHP_EOL;
