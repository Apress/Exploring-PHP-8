<?php

interface QuoteBotInterface
{
    public function getQuote(): string;
}

class QuoteBot implements QuoteBotInterface
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

function useQuoteBot(QuoteBotInterface $bot): void
{
    print $bot->getQuote();
}

$bot = new QuoteBot();
useQuoteBot($bot);
