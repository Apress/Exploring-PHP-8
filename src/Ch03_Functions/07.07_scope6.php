<?php

$quote = "We've gone on holiday by mistake." . PHP_EOL;

function printQuote (string $quote): void {
    $quote = "We're bona fide, we're not from London" . PHP_EOL;
    print $quote;
}

printQuote($quote);
print $quote;
