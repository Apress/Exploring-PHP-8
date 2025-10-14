<?php

class SingleQuoteBot
{
    protected array $quoteStash = [
        "Obviously, you're not a golfer." . PHP_EOL,
        "That's just, like, your opinion, man." . PHP_EOL,
        "Forget it, Donny You're out of your element." . PHP_EOL,
    ];

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        return new self();
    }

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0,2)];
    }
}

$bot = SingleQuoteBot::getInstance();
print $bot->getQuote() . PHP_EOL;
