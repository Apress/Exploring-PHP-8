<?php

const SOME_CONSTANT = 'a string';

if (defined('SOME_CONSTANT')) {
    echo "SOME_CONSTANT is already defined" . PHP_EOL;
}

if (!defined('SOME_OTHER_CONSTANT')) {
    define('SOME_OTHER_CONSTANT', true);
}

var_dump(defined(I_AM_NOT_DEFINED));
