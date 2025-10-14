<?php

$password = 'weaksauce';

$start = microtime(true);
$hash1 = password_hash($password, PASSWORD_BCRYPT);
$end = microtime(true) - $start;
print "{$hash1} - took {$end} s" . PHP_EOL;

print PHP_EOL;
