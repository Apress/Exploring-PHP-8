<?php
// Only to be run in a CLI environment!

function shallWeContinue(): void
{
    $in = readline('Type something to continue, or press Enter on its own to abort' . PHP_EOL);

    if (empty($in)) {
        exit("And we're done!" . PHP_EOL);
    }
}

function mainLoop(): never
{
    while (true) {
        shallWeContinue();
        print 'Hey ho, on we go...' . PHP_EOL;
    }
}

mainLoop();