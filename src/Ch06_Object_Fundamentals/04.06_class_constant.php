<?php

class QuoteBot
{
    public const FILM = "Barton Fink";
}

print QuoteBot::FILM;
$quoteBot = new QuoteBot();
print $quoteBot::FILM;
