<?php

var_dump(1 + 2);
var_dump(2.1 - 1); // will cast 1 to 1.0 and return a float
var_dump('2' * '4.5'); // will cast both strings to floats and return a float
var_dump(1_000_000 / 2); // special decimal integer syntax for readability