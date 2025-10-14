<?php

define('MY_STR', "You can't change me");
define('MY_INT', 123);
define('MY_FLOAT', 1.23);
define('MY_ARRAY', []);
define('MY_RESOURCE', fopen(__FILE__, "r"));
define('MY_NULL', null);

var_dump(MY_STR);
var_dump(MY_INT);
var_dump(MY_FLOAT);
var_dump(MY_ARRAY);
var_dump(MY_RESOURCE);
var_dump(MY_NULL);
