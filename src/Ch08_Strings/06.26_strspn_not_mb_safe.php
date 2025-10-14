<?php

$mbStr = "\u{1F920} kaboom!"; // a single emoji char, then a space, then kaboom!
var_dump(bin2hex("\u{1F920}")); // bytes 0xf0 0x9f 0xa4 0xa0 in UTF-8
var_dump(strspn($mbStr, "\u{1F920}")); // returns 4 because of multi-byte char
var_dump(strcspn($mbStr, " ")); // also returns 4
var_dump(strspn($mbStr, "\x9f\xa0\xf0\xa4")); // also returns 4 despite scrambling the byte order