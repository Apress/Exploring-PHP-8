<?php

class Suit
{
    public const CLUBS = 'clubs';
    public const DIAMONDS = 'diamonds';
    public const HEARTS = 'hearts';
    public const SPADES = 'spades';
}

class Card
{
    public function __construct(
        private readonly string $suit,
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
