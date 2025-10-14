<?php

var_dump(round(1.55, 1, PHP_ROUND_HALF_UP)); // If omitted, third argument defaults to this
var_dump(round(1.55, 1, PHP_ROUND_HALF_DOWN));
var_dump(round(1.55, 1, PHP_ROUND_HALF_EVEN));
var_dump(round(1.55, 1, PHP_ROUND_HALF_ODD));

var_dump(
    round(1.55, 1)
);