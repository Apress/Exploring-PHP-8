<?php

$utf16name = "\x00\x4e\x00\x61\x00\x6d\x00\x65\x00\x3a\x00\x20"
    . "\x01\x41\x00\x75\x00\x6b\x00\x61\x00\x73\x00\x7a";

$res = mb_strstr($utf16name, "\x01\x41\x00\x75", false, 'UTF-16');
var_dump(bin2hex($res));

$res = mb_strstr($utf16name, "\x01\x41\x00\x75");
var_dump(bin2hex($res));

$res = strstr($utf16name, "\x01\x41\x00\x75");
var_dump(bin2hex($res));
