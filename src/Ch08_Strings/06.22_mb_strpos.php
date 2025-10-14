<?php

$quote = "\u{15e}\u{fc}phe ve belirsizlik i\u{e7}ermeyen kat\u{131} kurallar talep ediyoruz!";
print $quote . PHP_EOL;

var_dump(bin2hex("\u{15e}\u{fc}phe"));

var_dump(strpos($quote, 'phe ve'));
var_dump(mb_strpos($quote, 'phe ve'));
