<?php

function testGlobalVars(): void
{
    global $txt;
    $txt = 'Watch me stamp all over global data...';
}

var_dump($txt);
testGlobalVars();
var_dump($txt);
