<?php

$myArr = ['Alice', 'Bob'];

var_dump($myArr["0"]); // string is coerced to an int
var_dump($myArr["0" + "1"]); // operation can be coerced to an int
var_dump($myArr[2 - 1]); // expression evaluates to integer 1
var_dump($myArr[getArrayKey()]); // function returns integer 0

function getArrayKey(): int
{
    return 0;
}
