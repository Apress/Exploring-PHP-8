<?php

trait DefaultQuote
{
    private const QUOTE = 'I am not a number! I am a free man!';
}

trait GetQuote
{
    use DefaultQuote;

    public static function getQuote(): string
    {
        return self::QUOTE;
    }
}
class GenericQuoteBot
{
    use GetQuote;
}

print GenericQuoteBot::getQuote() . PHP_EOL;
