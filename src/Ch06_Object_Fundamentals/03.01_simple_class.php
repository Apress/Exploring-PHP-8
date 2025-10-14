<?php

$quoteBot = new QuoteBot();

print $quoteBot->getQuote();

class QuoteBot
{
    public array $quoteStash = [
        "Obviously, you're not a golfer." . PHP_EOL,
        "That's just, like, your opinion, man." . PHP_EOL,
        "Forget it, Donny You're out of your element." . PHP_EOL,
    ];

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0,2)];
    }
}
