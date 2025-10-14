<?php

$leastSignificant = bindec('00011111');
$mostSignificant = bindec('11111000');

var_dump(decbin($mostSignificant & $leastSignificant)); // 00011000
var_dump(decbin($mostSignificant | $leastSignificant)); // 11111111
var_dump(decbin($mostSignificant ^ $leastSignificant)); // 11100111
