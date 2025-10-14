<?php

$largeNum = PHP_INT_MIN - 2000; // because loss of precision with float
dumpLargeNum((int) $largeNum);

function dumpLargeNum(int $num): void
{
    var_dump($num);
}
