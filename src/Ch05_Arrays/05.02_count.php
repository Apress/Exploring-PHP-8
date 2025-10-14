<?php

$myArr = ['Alice', 'Bob', 'Russell'];
$i = count($myArr);

$multiDArr = [
    ['Alice', 'Rita'],
    ['Sue', 'Bob'],
];
$j = count($multiDArr, COUNT_RECURSIVE);

print "There are {$i} people in \$myArr\n";
print "There are {$j} people in \$multiDArr\n";
