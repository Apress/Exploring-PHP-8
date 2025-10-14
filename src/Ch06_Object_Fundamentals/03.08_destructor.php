<?php

class FinkBot
{
    public function __construct()
    {
        print "Let's spit on our hands and get to work." . PHP_EOL;
    }

    public function __destruct()
    {
        print "I tried to show you... something beautiful." . PHP_EOL;
    }
}

$bot = new FinkBot();

print "Welcome to Los Angeles, Mr. Fink." . PHP_EOL;

unset($bot);

print "That's all, folks." . PHP_EOL;
