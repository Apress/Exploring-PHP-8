<?php

enum Suit: string
{
    case CLUBS = 'clubs';
    case DIAMONDS = 'diamonds';
    case HEARTS = 'hearts';
    case SPADES = 'spades';
}

var_dump(Suit::class);
var_dump(gettype(Suit::CLUBS));
var_dump(get_class(Suit::CLUBS));
var_dump(Suit::CLUBS->value);
