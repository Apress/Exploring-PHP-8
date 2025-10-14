<?php

function testArgs(string ...$in): void
{
    foreach ($in as $str) {
        print $str . ' ';
    }
}

$strings = ['I', 'hope', 'this', 'makes'];
$moreStrings = ['sense', 'too'];
testArgs(...$strings, ...$moreStrings);