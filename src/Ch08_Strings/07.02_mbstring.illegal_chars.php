<?php

$invalid2Octet = "\xC3\x28";
$invalidSequenceId = "\xA0\xA1";

print mb_get_info('illegal_chars') . PHP_EOL;
$converted = mb_convert_encoding(
    "I am {$invalid2Octet} broken {$invalidSequenceId}",
    'UTF-16BE',
    'UTF-8'
);
print $converted . PHP_EOL;
print bin2hex($converted) . PHP_EOL;
print mb_get_info('illegal_chars') . PHP_EOL;

print PHP_EOL;
