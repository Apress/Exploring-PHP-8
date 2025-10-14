<?php

$name = mb_convert_encoding("\u{C7}a\u{11F}ari", 'utf16');
var_dump(substr_count($name, 'a'));
var_dump(substr_count($name, "\u{C7}"));

var_dump(bin2hex($name));
var_dump(bin2hex('a'));
var_dump(bin2hex("\u{C7}"));
