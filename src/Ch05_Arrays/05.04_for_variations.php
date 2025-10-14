<?php

$myArr = ['Alice', 'Rita', 'Sue', 'Bob'];

for ($i = 0, $size = count($myArr); $i < $size; ) {
    print "{$myArr[$i]} is here.\n";
    $i++;
}

$i = 0;
$size = count($myArr);
for ( ; $i < $size; ) {
    print "{$myArr[$i]} is here.\n";
    $i++;
}