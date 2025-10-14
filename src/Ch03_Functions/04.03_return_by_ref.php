<?php

function &getCounter()
{
    static $i = 0;
    return $i;
}

$countOne = &getCounter();
$countTwo = &getCounter();
$countOne++;
var_dump($countTwo);
$countTwo++;
var_dump($countOne);
