<?php

function testArgs(string ...$in): void
{
    foreach ($in as $str) {
        print $str . ' ';
    }
}

testArgs('I', 'hope', 'this', 'makes', 'sense', new stdClass());