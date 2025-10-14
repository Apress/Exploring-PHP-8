<?php

class Finkbot
{
    public function __toString(): string
    {
        return "I tried to show you... something beautiful." . PHP_EOL;
    }
}

$finkBot = new Finkbot();

print "What does Finkbot say? {$finkBot}";

print PHP_EOL;
