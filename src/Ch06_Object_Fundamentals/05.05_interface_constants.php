<?php

interface QuoteBotInterface
{
    public const QUOTE = 'I am not a number! I am a free man!';
}

class GenericBot implements QuoteBotInterface
{
}

class LebowskiBot implements QuoteBotInterface
{
    public const QUOTE = "I'm a writer, you monsters! I create!"; // only since PHP 8.1
}

print GenericBot::QUOTE . PHP_EOL;
print LebowskiBot::QUOTE . PHP_EOL;
