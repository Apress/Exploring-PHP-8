<?php

$leastSignificant = bindec('00011111');

var_dump($leastSignificant); // int(31)
var_dump($leastSignificant == true); // returns bool(true) which casts to int(1)
var_dump($leastSignificant ^ $leastSignificant == true); // equivalent to 00011111 ^ 00000001
var_dump(($leastSignificant ^ $leastSignificant) == true); // equivalent to 00000000 == true
