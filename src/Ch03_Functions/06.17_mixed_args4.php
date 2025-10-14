<?php

function testArgs(string ...$in): void
{
    foreach ($in as $str) {
        print $str . ' ';
    }
}

$strings = ['I', 'hope', 'this', 'makes', 'sense'];
$moreStrings = 'too';
testArgs(...$strings, $moreStrings);