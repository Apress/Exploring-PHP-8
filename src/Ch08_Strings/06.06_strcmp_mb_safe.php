<?php

$mbStr1 = "\u{141}ukasz";
$mbStr2 = "Zebedee";

print "{$mbStr2} and {$mbStr1} are out of order." . PHP_EOL;
var_dump(strcmp($mbStr1, $mbStr2));

print bin2hex($mbStr1) . PHP_EOL;
print bin2hex($mbStr2) . PHP_EOL;
