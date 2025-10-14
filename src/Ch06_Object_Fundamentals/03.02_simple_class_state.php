<?php

$quoteBot1 = new QuoteBot();
$quoteBot2 = new QuoteBot();

$quoteBot2->quoteStash = [
    "Don't get uptight with me, man." . PHP_EOL,
    "I could take double anything you could." . PHP_EOL,
    "Very, very foolish words, man." . PHP_EOL,
];

print $quoteBot1->getQuote();
print $quoteBot2->getQuote();

class QuoteBot
{
    public array $quoteStash = [
        "Obviously, you're not a golfer." . PHP_EOL,
        "That's just, like, your opinion, man." . PHP_EOL,
        "Forget it, Donny You're out of your element." . PHP_EOL,
    ];

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0, 2)];
    }
}
