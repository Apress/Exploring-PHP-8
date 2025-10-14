<?php

$text = <<<EOT
    Hi there, and
    welcome to tokens!
    EOT;
$delimiters = " \n";

$token = strtok($text, $delimiters);

while ($token !== false) {
    print "token: {$token}" . PHP_EOL;
    $token = strtok($delimiters);
}
