<?php

$squid = "\u{1F991}";
var_dump(mb_ereg('.', $squid, $matches));
print_r($matches);

print PHP_EOL;

preg_match('/./', $squid, $matches);
print_r($matches);

print PHP_EOL;

preg_match('/./u', $squid, $matches);
print_r($matches);

print PHP_EOL;
