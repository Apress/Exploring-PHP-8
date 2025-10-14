<?php

// abc + broken surrogate pair
$brokenUtf16 = "\x00\x61\x00\x62\x00\x63\xD8\x00\xD8\x00";

mb_substitute_character(0xFFFD);
print bin2hex(mb_scrub($brokenUtf16)) . PHP_EOL;
print bin2hex(mb_scrub($brokenUtf16, 'UTF-16BE'));

print PHP_EOL;
