<?php

$validSurrogatePair = "\xD8\x00\xDC\x01"; //LINEAR B SYLLABLE B038 E - 𐀁

var_dump(mb_check_encoding($validSurrogatePair));
var_dump(mb_check_encoding($validSurrogatePair, 'UTF-16BE'));

print PHP_EOL;
