<?php

class QuoteBot
{
    public static array $quoteStash = [
        "I'm a writer, you monsters! I create!" . PHP_EOL,
        "I'll show you the life of the mind!" . PHP_EOL,
    ];
}

$quoteBot = new QuoteBot();
print $quoteBot->quoteStash[1];
print QuoteBot::$quoteStash[1];
