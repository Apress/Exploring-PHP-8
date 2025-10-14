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

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0,2)];
    }
}

$bot = new SingleQuoteBot();
