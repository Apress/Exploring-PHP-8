<?php

class QuoteBot
{
    private function getInsight(): string
    {
        return "I've always found that writing comes from a great inner pain." . PHP_EOL;
    }

    public static function insight(): void
    {
        print self::getInsight();
    }
}

QuoteBot::insight();
