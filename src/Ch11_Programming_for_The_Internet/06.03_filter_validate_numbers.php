<?php

var_dump(filter_var(1234, FILTER_VALIDATE_INT));
var_dump(filter_var('1234', FILTER_VALIDATE_INT));
var_dump(filter_var('123.4', FILTER_VALIDATE_INT));
var_dump(filter_var('123.4', FILTER_VALIDATE_FLOAT));

print PHP_EOL;

var_dump(filter_var(true, FILTER_VALIDATE_BOOL));
var_dump(filter_var('1', FILTER_VALIDATE_BOOL));
var_dump(filter_var('true', FILTER_VALIDATE_BOOL));
var_dump(filter_var('yes', FILTER_VALIDATE_BOOL));
