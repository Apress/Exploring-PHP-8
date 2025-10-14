<?php

function testArgs(string ...$in): void
{
    foreach ($in as $str) {
        print $str . ' ';
    }
}

$strings = ['I', 'hope', 'this', 'makes', 'sense', 'too'];
call_user_func_array('testArgs', $strings);
//testArgs(...$strings);