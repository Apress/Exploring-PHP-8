<?php

var_export(str_split("Thanks for all the fish."));

print PHP_EOL;

var_export(str_split("Thanks for all the fish.", 12));

print PHP_EOL;

$bytes = str_split("\u{5408}\u{6c23}\u{9053}"); // 合氣道 - will be UTF-8 encoded on *nix systems
foreach ($bytes as $byte) {
    print "0x" . bin2hex($byte) . " ";
}

print PHP_EOL;
