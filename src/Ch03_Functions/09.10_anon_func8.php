<?php

function getQuoteBot ()
{
    $quotes = [
        "We've gone on holiday by mistake.",
        "We're bona fide, we're not from London.",
        "We want the finest wines available to humanity.",
    ];

    $i = rand(0, 2);

    return fn (): string => $quotes[$i] . PHP_EOL;
}

$bot = getQuoteBot();
print $bot();
