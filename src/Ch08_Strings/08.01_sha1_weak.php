<?php

$password = 'weaksauce';
$hash = sha1($password);

$words = ['weak', 'strong', 'sauce', 'pickles', 'banana', 'infosec'];

foreach ($words as $word1) {
    testHash($word1, $hash);
    foreach ($words as $word2) {
        testHash($word1 . $word2, $hash);
    }
}

function testHash(string $word, string $hash): void {
    $ourHash = sha1($word);
    if ($ourHash == $hash) {
        exit("Password found! {$ourHash} / {$word}" . PHP_EOL);
    }
}
