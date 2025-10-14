<?php

$alicePair = sodium_crypto_box_keypair();
$pubAlice = sodium_crypto_box_publickey($alicePair);
$privAlice = sodium_crypto_box_secretkey($alicePair);

$bobPair = sodium_crypto_box_keypair();
$pubBob = sodium_crypto_box_publickey($bobPair);
$privBob = sodium_crypto_box_secretkey($bobPair);

$aliceKey = sodium_crypto_box_keypair_from_secretkey_and_publickey(
    $privAlice,
    $pubBob
);
$bobKey = sodium_crypto_box_keypair_from_secretkey_and_publickey(
    $privBob,
    $pubAlice
);

$message = 'The lamb lies down on Broadway.';
$nonce = random_bytes(SODIUM_CRYPTO_BOX_NONCEBYTES);
$encrypted_message = sodium_crypto_box($message, $nonce, $aliceKey);

print bin2hex($message) . PHP_EOL;
print bin2hex($encrypted_message) . PHP_EOL;

$decrypted_message = sodium_crypto_box_open(
    $encrypted_message,
    $nonce,
    $bobKey
);
print $decrypted_message;

print PHP_EOL;
