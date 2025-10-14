<?php

$quoteBot2 = new QuoteBot();

$quoteBot2->setQuoteStash([
    "Don't get uptight with me, man." . PHP_EOL,
    "I could take double anything you could." . PHP_EOL,
    "Very, very foolish words, man." . PHP_EOL,
]);

print $quoteBot2->getQuote();
class QuoteBot
{
    private array $quoteStash = [];

    public function setQuoteStash(array $stash): void
    {
        $this->quoteStash = $stash;
    }

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0, 2)];
    }
}
