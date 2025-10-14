<?php

$largeNum = PHP_INT_MAX + 1;
dumpLargeNum((int) $largeNum);

function dumpLargeNum(int $num): void
{
    var_dump($num);
}
