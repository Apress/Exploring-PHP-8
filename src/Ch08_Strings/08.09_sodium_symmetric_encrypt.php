<?php

$secret = sodium_crypto_secretbox_keygen();;
$message = 'WE RIDE AT DAWN.';

$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
$encrypted_message = sodium_crypto_secretbox($message,
    $nonce,
    $secret
);

print bin2hex($message) . PHP_EOL;
print bin2hex($encrypted_message) . PHP_EOL;

$decrypted_message = sodium_crypto_secretbox_open($encrypted_message, $nonce, $secret);
print $decrypted_message;

print PHP_EOL;
