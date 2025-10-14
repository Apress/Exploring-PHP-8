<?php

function getQuoteBot (): callable
{
    $quotes = [
        "We've gone on holiday by mistake.",
        "We're bona fide, we're not from London.",
        "We want the finest wines available to humanity.",
    ];

    $i = rand(0, 2);

    return function () use ($quotes, $i): string {
        return $quotes[$i] . PHP_EOL;
    };
}

$bot = getQuoteBot();
print $bot();
