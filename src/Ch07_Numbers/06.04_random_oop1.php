<?php

$randomizer = new \Random\Randomizer();

var_dump($randomizer->getInt(0, 100));
var_dump($randomizer->getBytes(8));

// Mersenne Twister engine - NOT crypto secure
$randomizer = new \Random\Randomizer(new \Random\Engine\Mt19937());

var_dump($randomizer->getInt(0, 100));
var_dump($randomizer->getBytes(8));