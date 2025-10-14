<?php

$invalidDoubleByte = "\xC2\x28";
$validUTF8 = "\u{141}ukasz";

print mb_get_info('strict_detection') . PHP_EOL;
var_dump(mb_detect_encoding(
    $validUTF8 . $invalidDoubleByte
));
print mb_get_info('illegal_chars') . PHP_EOL;

var_dump(mb_detect_encoding(
    $validUTF8 . $invalidDoubleByte,
    strict: true
));

print PHP_EOL;
