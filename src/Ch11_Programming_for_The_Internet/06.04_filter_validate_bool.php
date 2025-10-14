<?php

var_dump(filter_var(1.0, FILTER_VALIDATE_BOOL));
var_dump(filter_var('1.0', FILTER_VALIDATE_BOOL));

print PHP_EOL;

var_dump(filter_var(false, FILTER_VALIDATE_BOOL));
var_dump(filter_var('false', FILTER_VALIDATE_BOOL));
var_dump(filter_var('0', FILTER_VALIDATE_BOOL));
var_dump(filter_var('no', FILTER_VALIDATE_BOOL));
var_dump(filter_var('unsigned 2003 Toyota Yaris', FILTER_VALIDATE_BOOL));

print PHP_EOL;

var_dump(filter_var(
    'unsigned 2003 Toyota Yaris',
    FILTER_VALIDATE_BOOL,
    FILTER_NULL_ON_FAILURE
));
