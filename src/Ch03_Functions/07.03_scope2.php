<?php

$txt = 'Greetings from global scope' . PHP_EOL;
testScope1();
testScope2();

function testScope1(): void
{
    global $txt;
    print $txt;
}

function testScope2(): void
{
    print $GLOBALS['txt'];
}
