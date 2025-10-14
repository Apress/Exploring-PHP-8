<?php

$cb = getCallback();
$cb();
getCallback()();

function getCallback(): callable
{
    return static function (): void {
        print "Who am I?" . PHP_EOL;
    };
}
