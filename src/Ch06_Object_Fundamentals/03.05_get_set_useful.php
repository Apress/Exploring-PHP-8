<?php

class QuoteBot
{
    private array $quoteStash = [];

    public function setQuoteStash(string ...$stash): void
    {
        $this->quoteStash = $stash;
    }

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0, 2)];
    }
}

$bot = new QuoteBot();
$bot->setQuoteStash(
    "Don't get uptight with me, man." . PHP_EOL,
    new stdClass(),
);
