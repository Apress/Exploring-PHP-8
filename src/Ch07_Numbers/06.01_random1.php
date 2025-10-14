<?php

var_dump(rand()); // random int between 0 and a system-dependent maximum
var_dump(mt_rand(0, 6)); // random int, min 0 and max 6
var_dump(rand(-1, 1)); // random int min -1 and max 1
var_dump(getrandmax()); // varies with platform
var_dump(mt_getrandmax()); // varies with platform