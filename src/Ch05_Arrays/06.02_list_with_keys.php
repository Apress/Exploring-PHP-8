<?php

$myArr1 = ['Alice', 'Rita', 'Sue', 'Bob'];
$myArr2 = [
    'lang' => 'PHP',
    'ver'  => '8.2',
];

list (2 => $third, 3 => $fourth) = $myArr1;
[$first, $second] = $myArr1;
list ('lang' => $lang, 'ver' => $ver) = $myArr2;

var_dump($first);
var_dump($second);
var_dump($third);
var_dump($fourth);

print "{$lang}{$ver} FTW!\n";
