<?php

function testArgs(): void
{
    foreach (func_get_args() as $str) {
        print $str . ' ';
    }
}

testArgs('I', 'hope', 'this', 'makes', 'sense', new stdClass());
