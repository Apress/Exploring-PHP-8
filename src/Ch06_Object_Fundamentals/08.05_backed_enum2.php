<?php

enum Suit: string
{
    case CLUBS = 'clubs';
    case DIAMONDS = 'diamonds';
    case HEARTS = 'hearts';
    case SPADES = 'spades';
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
        return "{$this->value} of {$this->suit->value}";
    }
}

$card = new Card(Suit::SPADES, 'ace');
print "The {$card->getFullName()}, the {$card->getFullName()} \m/" . PHP_EOL;
