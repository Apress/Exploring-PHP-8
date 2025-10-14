<?php

$rawUTF16BE = "\x00\x48\x00\x65\x00\x6C\x00\x6C\x00\x6F";

print mb_internal_encoding() . PHP_EOL;
print bin2hex(mb_convert_encoding($rawUTF16BE, to_encoding: 'UTF-8')) . PHP_EOL;

mb_internal_encoding("UTF-16BE");
print bin2hex(mb_convert_encoding($rawUTF16BE, to_encoding: 'UTF-8')) . PHP_EOL;

print PHP_EOL;
