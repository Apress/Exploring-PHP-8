<?php

$name = "\u{141}ukasz";
print bin2hex($name) . PHP_EOL;
print bin2hex(mb_convert_encoding($name, to_encoding: 'UTF-16BE'));

print PHP_EOL . PHP_EOL;

$utf16Name = "\x01\x41\x00\x75\x00\x6b\x00\x61\x00\x73\x00\x7a";
print bin2hex(mb_convert_encoding($utf16Name, to_encoding: 'UTF-8'));

print PHP_EOL . PHP_EOL;

mb_internal_encoding("UTF-16BE");
print bin2hex(mb_convert_encoding($utf16Name, to_encoding: 'UTF-8'));

print PHP_EOL;