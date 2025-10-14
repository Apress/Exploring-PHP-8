<?php

$str = 'wHo cAreS aBoUt ThE fIfTh eArl oF bAtHsDrOp aNd lAdY hIgGeNboTtOm';

print mb_convert_case($str, MB_CASE_UPPER) . PHP_EOL;
print mb_convert_case($str, MB_CASE_LOWER) . PHP_EOL;
print mb_convert_case($str, MB_CASE_TITLE) . PHP_EOL;

//$quote = "\u{15e}\u{fc}phe ve belirsizlik i\u{e7}ermeyen kat\u{131} kurallar talep ediyoruz!";
