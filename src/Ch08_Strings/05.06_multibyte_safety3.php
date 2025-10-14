<?php

$lat = 'ABCDE';
$pol = 'AĄBCĆ';

var_dump(mb_strlen($lat));
var_dump(mb_strlen($pol));

$me = mb_strtolower('Paul');
$friend = mb_strtolower('Łukasz');

print "{$me} and {$friend} are going for a pint." . PHP_EOL;
