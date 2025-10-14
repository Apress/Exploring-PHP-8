<?php

$lcname = "\u{142}ukasz";
$ucname = "\u{141}UKASZ";

print "{$lcname} > " . lcfirst($lcname) . PHP_EOL;
print "{$lcname} > " . mb_lcfirst($lcname) . PHP_EOL;
print "{$ucname} > " . mb_ucfirst($ucname);

print PHP_EOL;

print mb_ucfirst("idil"); // Correct transform should be İdil - U+0130

print PHP_EOL;

setlocale(LC_ALL, 'tr_TR.UTF-8');
print mb_ucfirst("idil"); // Not working despite locale

print PHP_EOL;

// mb_lcfirst() mb_ucfirst() both wrap internal calls to mb_convert_case...
// https://github.com/php/php-src/blob/php-8.4.0beta4/ext/mbstring/mbstring.c#L2960