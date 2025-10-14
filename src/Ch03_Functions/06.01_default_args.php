<?php

function addOneOrMore($a, $b = 1) {
    return $a + $b;
}

var_dump(addOneOrMore(2, 2));
var_dump(addOneOrMore(2));
