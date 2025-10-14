<?php

var_dump(filter_var('1234abc', FILTER_SANITIZE_NUMBER_INT));
var_dump(filter_var('123.4abc', FILTER_SANITIZE_NUMBER_FLOAT));

print PHP_EOL;

var_dump(filter_var(
    '123.4',
    FILTER_SANITIZE_NUMBER_FLOAT,
    FILTER_FLAG_ALLOW_FRACTION
));
