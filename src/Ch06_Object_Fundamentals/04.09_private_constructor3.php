<?php

class SingleQuoteBot
{
    protected static $instance = null;

    private function __construct(private string $quote)
    {
    }

    public static function getInstance($quote): self
    {
        if (self::$instance === null) {
            self::$instance = new self($quote);
        }

        return self::$instance;
    }

    public function getQuote(): string
    {
        return $this->quote;
    }
}

$bot1 = SingleQuoteBot::getInstance(
    "Of all the gin joints in all the towns in all the world, she walks into mine"
);
$bot2 = SingleQuoteBot::getInstance("any old nonsense.");

print $bot1->getQuote() . PHP_EOL;
print $bot2->getQuote() . PHP_EOL;
