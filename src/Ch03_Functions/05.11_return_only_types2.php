<?php
// Only to be run in a CLI environment!

function shallWeContinue(): bool
{
    $in = readline('Type something to continue, or press Enter on its own to abort' . PHP_EOL);

    return (!empty($in));
}

function mainLoop(): never
{
    while (shallWeContinue()) {
        print 'Hey ho, on we go...' . PHP_EOL;
    }
}

mainLoop();