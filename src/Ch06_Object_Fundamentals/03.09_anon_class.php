<?php

$bot = new class(['some', 'quotes'])
{
    public function __construct(private array $quoteStash)
    {
    }
};

var_dump($bot);
