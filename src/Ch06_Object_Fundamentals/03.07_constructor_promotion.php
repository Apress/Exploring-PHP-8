<?php

$quoteBot2 = new QuoteBot([
    "Don't get uptight with me, man." . PHP_EOL,
    "I could take double anything you could." . PHP_EOL,
    "Very, very foolish words, man." . PHP_EOL,
]);

print $quoteBot2->getQuote();

class QuoteBot
{
    private int $numQuotes;

    public function __construct(private array $quoteStash)
    {
        $this->numQuotes = count($this->quoteStash) - 1; // used as array index
    }

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0, $this->numQuotes)];
    }
}
