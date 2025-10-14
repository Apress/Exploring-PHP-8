<?php

$text = 'Highly irregular was the time I found a human foot in a toaster oven';
$pattern = '/\p{Zs}/';
var_dump(preg_match_all($pattern, $text));

print PHP_EOL;

$cyrillic = "\u{421}\u{421}\u{421}\u{420}";
$pattern = '/\p{Cyrillic}/u'; // note the 'u' modifier
print $cyrillic . PHP_EOL;
var_dump(preg_match_all($pattern, $cyrillic));
