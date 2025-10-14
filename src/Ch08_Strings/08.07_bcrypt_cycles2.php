<?php

function doHash(string $password, string $salt, int $cost = 10): void
{
    $start = microtime(true);
    $hash = crypt($password, "$2y\${$cost}\${$salt}");
    $end = microtime(true) - $start;
    print "{$hash} - took {$end} s" . PHP_EOL;
}

$password = 'weaksauce';
$hash1 = '$2y$10$2alN7H818NP.8BZAoerYxebJI0TsNz4MItmDx1notHgXQwNGxsSCC';
$salt = substr($hash1, 7, 22);
doHash($password, $salt);

print PHP_EOL;

doHash($password, $salt, 11);
doHash($password, $salt, 12);
doHash($password, $salt, 13);
doHash($password, $salt, 14);
