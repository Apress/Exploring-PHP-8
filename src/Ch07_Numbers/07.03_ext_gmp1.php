<?php

$largeNum = (string) PHP_INT_MAX;

print gmp_add($largeNum, $largeNum) . PHP_EOL;
var_dump(gmp_binomial($largeNum, 2)); // Binomial coefficient C(n, k)
var_dump(gmp_nextprime(PHP_INT_MAX));

$bin1 = gmp_init('00011111', 2);
$bin2 = gmp_init('11111000', 2);

var_dump(gmp_hamdist($bin1, $bin2));  // The Hamming distance between two binary numbers
