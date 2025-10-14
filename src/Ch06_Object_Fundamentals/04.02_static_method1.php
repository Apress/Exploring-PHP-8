<?php

class QuoteBot
{
    public static array $quoteStash = [
        "I'm a writer, you monsters! I create!" . PHP_EOL,
        "I'll show you the life of the mind!" . PHP_EOL,
    ];

    public static function insight(): string
    {
        return "I've always found that writing comes from a great inner pain." . PHP_EOL;
    }

    public static function getQuote(): string
    {
        return self::$quoteStash[rand(0,1)];
    }
}

print QuoteBot::insight();

$quoteBot = new QuoteBot();
print $quoteBot::insight(); // not $quoteBot->insight()
print $quoteBot::$quoteStash[0]; // not $quoteBot->$quoteStash
