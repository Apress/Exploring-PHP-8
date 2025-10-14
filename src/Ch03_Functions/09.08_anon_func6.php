<?php

function getCallbackWithArg(string $txt): callable
{
    return function () use ($txt): void {
        print "You gave me the string '{$txt}'" . PHP_EOL;
    };
}

getCallbackWithArg('I hope this works')(); // spoilers, it does!
