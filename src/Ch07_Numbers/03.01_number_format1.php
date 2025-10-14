<?php

$number = 100000000000.01;

// number_format(
//     float $num,
//     int $decimals = 0,
//     ?string $decimal_separator = ".",
//     ?string $thousands_separator = ","
// ): string
print number_format($number, 0, '', '') . PHP_EOL;
print number_format($number, 2, '.', ',') . PHP_EOL;
print number_format($number, 2, ',', ' ') . PHP_EOL;
