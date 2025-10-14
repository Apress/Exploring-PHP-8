<?php

$chars = mb_str_split("\u{5408}\u{6c23}\u{9053}"); // 合氣道 - will be UTF-8 encoded on *nix systems
foreach ($chars as $char) {
    print $char . PHP_EOL;
}

$utf16str = "\x54\x08\x62\xc3\x90\x53"; // 合氣道 - raw byte values for UTF-16 encoding
$chars = mb_str_split($utf16str, 1, 'UTF-16');
foreach ($chars as $char) {
    print bin2hex($char) . PHP_EOL;
}
