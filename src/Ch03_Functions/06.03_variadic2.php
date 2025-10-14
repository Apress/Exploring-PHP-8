<?php

function testArgs(): void
{
    print "testArgs was called with " . func_num_args() . " arguments" . PHP_EOL;
    print "first argument value is " . func_get_arg(0) . PHP_EOL;
    print_r(func_get_args());
}

testArgs('I', 'hope', 'this', 'makes', 'sense');
