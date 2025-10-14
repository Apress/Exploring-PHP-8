<?php

$utf16Str = mb_convert_encoding("\u{C7}a\u{11F}ari", 'UTF-16');
$utf32Str = mb_convert_encoding("\u{C7}a\u{11F}ari", 'UTF-32');

var_dump(bin2hex($utf16Str));
var_dump(bin2hex($utf32Str));

var_dump(mb_substr_count($utf16Str, "\u{11F}ari"));
var_dump(mb_substr_count($utf32Str, "\u{11F}ari"));
