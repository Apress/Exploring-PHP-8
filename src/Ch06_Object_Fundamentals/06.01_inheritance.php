<?php

class QuoteBot
{
    protected array $quoteStash = ['', '', ''];

    public function getQuote(): string
    {
        return $this->quoteStash[rand(0,2)];
    }
}

class LebowskiBot extends QuoteBot
{
    protected array $quoteStash = [
        "Obviously, you're not a golfer." . PHP_EOL,
        "That's just, like, your opinion, man." . PHP_EOL,
        "Forget it, Donny You're out of your element." . PHP_EOL,
    ];
}

class FinkBot extends QuoteBot
{
    protected array $quoteStash = [
        "I'm a writer, you monsters! I create!" . PHP_EOL,
        "I'll show you the life of the mind!" . PHP_EOL,
        "I've always found that writing comes from a great inner pain." . PHP_EOL,
    ];
}

$lebowski = new LebowskiBot();
print $lebowski->getQuote();

function printQuote(QuoteBot $bot): void
{
    print $bot->getQuote();
}

$fink = new FinkBot();
printQuote($fink);
