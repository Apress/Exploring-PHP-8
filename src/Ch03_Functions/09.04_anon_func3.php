<?php

handleCallback(function (): void {
    print "Who am I?" . PHP_EOL;
});


function handleCallback(callable $cb): void
{
    // do things then make the callback...
    $cb();
}
