<?php

trait DefaultQuote
{
    public const QUOTE = 'I am not a number! I am a free man!'; // requires PHP 8.2
}

class GenericQuoteBot
{
    use DefaultQuote;
}

print GenericQuoteBot::QUOTE . PHP_EOL;
