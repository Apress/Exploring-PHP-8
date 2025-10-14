<?php

function breakMyArray(array &$things)
{
    $things = 'Oops!';
}

$arr = ['some', 'lovely', 'things'];

breakMyArray($arr);
print "Attempting second call to breakMyArray()" . PHP_EOL;
breakMyArray($arr);