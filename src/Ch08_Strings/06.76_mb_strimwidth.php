<?php

$str = 'The quick brown fox';

print mb_strimwidth($str, 0, 6) . PHP_EOL;
print mb_strimwidth($str, 1, 6) . PHP_EOL;
print mb_strimwidth($str, 2, 6) . PHP_EOL;
print mb_strimwidth($str, 3, 6);

print PHP_EOL;

print mb_strimwidth($str, 0, 6, '...') . PHP_EOL;
print mb_strimwidth($str, 0, 9, '...');

print PHP_EOL;

$halfSu = "\u{FF7D}"; // ｽ
$fullSu = "\u{30B9}"; // ス

print mb_strimwidth("Text", 0, 3, $halfSu) . PHP_EOL;
print mb_strimwidth("Text", 0, 3, $fullSu);

print PHP_EOL;

