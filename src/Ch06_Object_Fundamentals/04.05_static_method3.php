<?php

class QuoteBot
{
    private static function getInsight(): string
    {
        return "I've always found that writing comes from a great inner pain." . PHP_EOL;
    }

    public function insight(): void
    {
        print self::getInsight();
    }
}

$bot = new QuoteBot();
$bot->insight();
