<?php

$paddingChars = "\u{1F3F3}\u{FE0F}\u{200D}\u{1F308} \u{1F3F4}\u{200D}\u{2620}\u{FE0F}";
$text = 'Text';

print $paddingChars . PHP_EOL;
print mb_str_pad($text, 13, $paddingChars, STR_PAD_LEFT);

print PHP_EOL;

print mb_str_pad($text, 5, $paddingChars, STR_PAD_LEFT);

print PHP_EOL;