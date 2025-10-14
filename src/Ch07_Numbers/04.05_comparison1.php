<?php

$a = 1;
$b = 2;
$strA = '1';
$strB = '2';

var_dump($a == $b); // True if values are equal
var_dump($a == $strA); // True (string is cast to int)
var_dump($a === $strA); // True if values AND types are equal
var_dump($a != $b); // True if values are not equal
var_dump($a <> $b); // Same as !=
var_dump($a !== $strA); // True if values are not equal OR types are different
var_dump($a < $b); // True if $a is less than $b
var_dump($a > $b); // True if $a is more than $b
var_dump($a <= $b); // True if $a is less than or equal to $b
var_dump($a >= $b); // True if $a is more than or equal to $b
var_dump($a <=> $b); // Returns -1, 0, or 1 if $a is less than, equal to, or greater than $b