<?php

function outer(): void
{
    $funcName = 'outer()';
    inner();
    print $funcName . PHP_EOL;
}

function inner(): void
{
    $funcName = 'inner()';
    print $funcName . PHP_EOL;
}

outer();
