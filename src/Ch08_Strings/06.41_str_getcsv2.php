<?php

$csvRow1 = "Douglas Adams,"
    . "you may think it's a long way down the road to the chemist's, but that's just peanuts to space.";
$csvRow2 = "Iain M. Banks,"
    . '"I am not an animal brain, I am not even some attempt to produce an AI through software running on a computer"';

print_r(str_getcsv($csvRow1, escape: '\\'));
print_r(str_getcsv($csvRow2, escape: '\\'));
