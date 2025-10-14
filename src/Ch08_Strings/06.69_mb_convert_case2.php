<?php

/*
 * https://www.unicode.org/Public/15.1.0/ucd/SpecialCasing.txt
 * Format:  <code>; <lower>; <title>; <upper>; (<condition_list>;)? # <comment>
 * I > ı    0049; 0131; 0049; 0049; tr Not_Before_Dot; # LATIN CAPITAL LETTER I
 * i > İ    0069; 0069; 0130; 0130; tr; # LATIN SMALL LETTER I
 *
 * https://www.unicode.org/Public/15.1.0/ucd/UnicodeData.txt
 * Format:  <code>;<name>;2;3;4;5;6;7;8;9;10;11;<upper>;<lower>;<title>
 * I > i    0049;LATIN CAPITAL LETTER I;Lu;0;L;;;;;N;;;;0069;
 * i > I    0069;LATIN SMALL LETTER I;Ll;0;L;;;;;N;;;0049;;0049
 */

setlocale(LC_ALL, 'tr_TR.UTF-8'); // assumes system locale is installed

print "Test that i maps to \u{130}: " . mb_convert_case('i', MB_CASE_UPPER) . PHP_EOL;
print "Test that I maps to \u{131}: " . mb_convert_case("I", MB_CASE_LOWER);

print PHP_EOL;

/*
 * Special
 * 03A3; 03C2; 03A3; 03A3; Final_Sigma; # GREEK CAPITAL LETTER SIGMA
 * Σ > ς (03C2 if final letter)
 *
 * Normal
 * 03A3;GREEK CAPITAL LETTER SIGMA;Lu;0;L;;;;;N;;;;03C3;
 * Σ > σ (03C3)
 */

$finalSigmaTest = "FINAL\u{03A3} \u{03A3}NON-FINAL";
print $finalSigmaTest . PHP_EOL;
print mb_convert_case($finalSigmaTest, MB_CASE_LOWER);

print PHP_EOL;
