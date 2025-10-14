<?php

class TheHellIsGoingOnRn
{
    public $solution = null;
    public function noClue(): void
    {}
}
$mystery = new TheHellIsGoingOnRn();
$prop = $mystery->solution?->answer();
$answer = $mystery->noClue()?->answer();
var_dump($prop);
var_dump($answer);

print PHP_EOL;

$noObject = null;
var_dump($noObject?->whatever());
