<?php

$singleCodepointChar = "\u{130}";
$multiCodepointChar = "\u{49}\u{307}";

print "Is it {$singleCodepointChar} or {$multiCodepointChar}?";

print PHP_EOL.PHP_EOL;

$convertedSingle = mb_convert_case($singleCodepointChar, MB_CASE_LOWER);
$convertedMulti = mb_convert_case($multiCodepointChar, MB_CASE_LOWER);

print bin2hex($convertedSingle) . PHP_EOL;
print bin2hex($convertedMulti);

print PHP_EOL.PHP_EOL;

print bin2hex($singleCodepointChar) . PHP_EOL;
print bin2hex($multiCodepointChar);

print PHP_EOL;

var_dump(
    mb_convert_case($singleCodepointChar, MB_CASE_FOLD) ===
    mb_convert_case($multiCodepointChar, MB_CASE_FOLD)
);

print PHP_EOL;
