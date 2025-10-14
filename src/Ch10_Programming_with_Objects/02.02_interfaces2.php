<?php

interface QuoteBotInterface
{
    public function getQuote(): string;
}

class LebowskiBot implements QuoteBotInterface
{
    private array $quoteStash = [
        "Obviously, you're not a golfer." . PHP_EOL,
        "That's just, like, your opinion, man." . PHP_EOL,
        "Forget it, Donny You're out of your element." . PHP_EOL,
    ];

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0,2)];
    }
}

class FinkBot implements QuoteBotInterface
{
    private array $quoteStash = [
        "I'm a writer, you monsters! I create!" . PHP_EOL,
        "I'll show you the life of the mind!" . PHP_EOL,
        "I've always found that writing comes from a great inner pain." . PHP_EOL,
    ];

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0,2)];
    }
}

function useQuoteBot(QuoteBotInterface $bot): void
{
    print $bot->getQuote();
}

$lebowski = new LebowskiBot();
$fink = new FinkBot();

useQuoteBot($lebowski);
useQuoteBot($fink);
