<?php

function testArgs(string $first, string ...$rest): void
{
    print $first . ' ';

    foreach ($rest as $str) {
        print $str . ' ';
    }
}

testArgs('I', 'hope', 'this', 'makes', 'sense', 'too');