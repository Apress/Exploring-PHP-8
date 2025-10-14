<?php

$randomizer = new \Random\Randomizer();

var_dump($randomizer->nextInt());
var_dump($randomizer->shuffleBytes('I love random numbers'));

$arr = ['I', 'love', 'random', 'numbers'];

var_dump($randomizer->shuffleArray($arr));
$keys = $randomizer->pickArrayKeys($arr, 2);
foreach ($keys as $k) {
    print $arr[$k] . ' ';
}