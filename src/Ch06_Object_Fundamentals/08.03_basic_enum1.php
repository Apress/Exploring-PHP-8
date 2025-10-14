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
}

var_dump(new Card(Suit::SPADES, 'ace'));
$card = new Card('cabbages', 'four');