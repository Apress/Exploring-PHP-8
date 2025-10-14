<?php

$invalid2Octet = "\xC3\x28";
print mb_substitute_character() . PHP_EOL;
mb_substitute_character(0xFFFD);

$converted = mb_convert_encoding(
    "Te{$invalid2Octet}st",
    to_encoding: 'UTF-16BE',
    from_encoding: 'UTF-8',
);
print bin2hex($converted);

print PHP_EOL . PHP_EOL;

mb_substitute_character(0xFFFD);
$invalidSurrogatePair = "\xD8\x00\xD8\x00";
$validUtf16 = "\x00\x54\x00\x65\x00\x73\x00\x74";

$converted = mb_convert_encoding(
    $validUtf16 . $invalidSurrogatePair,
    to_encoding: 'UTF-8',
    from_encoding: 'UTF-16BE',
);
print $converted . PHP_EOL;
print bin2hex($converted);

print PHP_EOL;
