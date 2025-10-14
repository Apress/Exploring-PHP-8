<?php

function breakMyArray(array &$things): array
{
    $things = 'Oops!';
}

$arr = ['some', 'lovely', 'things'];

breakMyArray($arr);
breakMyArray($arr);