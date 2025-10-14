<?php

$secretHexValue = 'b94d27b9934d3e08a52e52d7da7dabfac484efe37a5380ee9088f7ace2efcde9';
$userInput = '{ "token": 0 }';

$userData = json_decode($userInput, true);

var_dump($userData);

if ($secretHexValue == $userData['token']) {
    print "I just got hacked :(" . PHP_EOL;
}
