<?php

$smallSharp_S = "\u{DF}";
$capitalSharp_S = "\u{1E9E}";
$sentence = "{$smallSharp_S} aNd {$capitalSharp_S} lOoK pReTtY sImiLaR...";

print $sentence . PHP_EOL;
print mb_convert_case($sentence, MB_CASE_LOWER) . PHP_EOL;

var_dump(
    mb_convert_case($smallSharp_S, MB_CASE_LOWER) ===
    mb_convert_case($capitalSharp_S, MB_CASE_LOWER)
);

var_dump(
    mb_convert_case($smallSharp_S, MB_CASE_FOLD) ===
    mb_convert_case($capitalSharp_S, MB_CASE_FOLD)
);

print PHP_EOL;
