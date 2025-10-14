<?php

$secret = 'MySecretKey';
$message = 'The eagle flies at dawn.';
print hash_hmac("sha256", $message, $secret);

print PHP_EOL;

print_r(hash_hmac_algos());
