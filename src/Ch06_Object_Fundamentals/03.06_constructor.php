<?php

$quoteBot2 = new QuoteBot([
    "Don't get uptight with me, man." . PHP_EOL,
    "I could take double anything you could." . PHP_EOL,
    "Very, very foolish words, man." . PHP_EOL,
]);

print $quoteBot2->getQuote();

class QuoteBot
{
    private array $quoteStash;
    private int $numQuotes;

    public function __construct(array $stash)
    {
        $this->quoteStash = $stash;
        $this->numQuotes = count($stash) - 1; // used as array index
    }

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0, $this->numQuotes)];
    }
}
