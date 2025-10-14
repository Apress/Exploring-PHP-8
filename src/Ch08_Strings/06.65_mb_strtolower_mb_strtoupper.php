<?php

$quote = "\u{15e}\u{fc}phe ve belirsizlik i\u{e7}ermeyen kat\u{131} kurallar talep ediyoruz!";
$lower = mb_strtolower($quote);
$upper = mb_strtoupper($quote);

print $quote . PHP_EOL;
print $lower . PHP_EOL;
print $upper . PHP_EOL;
