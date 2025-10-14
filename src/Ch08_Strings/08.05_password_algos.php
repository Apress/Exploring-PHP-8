<?php

print_r(password_algos());

print PHP_EOL;

var_dump(password_verify(
    'weaksauce',
    password_hash("weaksauce", PASSWORD_DEFAULT)
));
var_dump(password_verify(
    'weaksauce',
    password_hash("weaksauce", PASSWORD_ARGON2I)
));

print PHP_EOL;
