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

    public function getSuit(): string
    {
        return $this->suit;
    }
}

$card = new Card('cabbages', 'four');

switch ($card->getSuit()) {
    case Suit::CLUBS:
    case Suit::DIAMONDS:
    case Suit::HEARTS:
    case Suit::SPADES:
        // carry on with the game
        break;
    default:
        throw new \Exception('Preposterous!');
}
