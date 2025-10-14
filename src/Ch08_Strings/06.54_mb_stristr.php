<?php

$name = "Name: \u{141}ukasz";
print mb_stristr($name, "\u{142}") . PHP_EOL;

//            N       a       m       e       :       <SPC>
$utf16name = "\x00\x4e\x00\x61\x00\x6d\x00\x65\x00\x3a\x00\x20"
//     Ł       u       k       a       s       z
    . "\x01\x41\x00\x75\x00\x6b\x00\x61\x00\x73\x00\x7a";
//                               ł
var_dump(mb_stristr($utf16name, "\x01\x42", false, 'UTF-16'));
