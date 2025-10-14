<?php

$txt = "Let's break stuff" . PHP_EOL;

print $txt;
testScope();

function testScope(): void
{
    print $txt;
}
