<?php

$utf16Str = mb_convert_encoding("\u{C7}a\u{11F}ari", 'UTF-16');
$utf32Str = mb_convert_encoding("\u{C7}a\u{11F}ari", 'UTF-32');

var_dump(mb_substr_count($utf16Str, "\u{11F}ari", 'UTF-16'));
var_dump(mb_substr_count($utf32Str, "\u{11F}ari", 'UTF-32'));

var_dump(mb_substr_count(
    $utf32Str,
    mb_convert_encoding("\u{11F}ari", 'UTF-32'),
));

var_dump(substr_count(
    mb_convert_encoding($utf32Str, 'UTF-8', 'UTF-32'),
    "\u{11F}"
));
