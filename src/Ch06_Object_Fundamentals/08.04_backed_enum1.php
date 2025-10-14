<?php

enum Suit
{
    case CLUBS;
    case DIAMONDS;
    case HEARTS;
    case SPADES;
}

class Card
{
    public function __construct(
        private readonly Suit $suit,
        private readonly string $value
    ) {
    }

    public function getFullName(): string
    {
        return "{$this->value} of {$this->suit}";
    }
}

$card = new Card(Suit::SPADES, 'ace');
print "The {$card->getFullName()}, the {$card->getFullName()} \m/" . PHP_EOL;
