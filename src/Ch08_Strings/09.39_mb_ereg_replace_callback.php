<?php

$text = "\u{c7}a\u{11f}ari";
print $text . PHP_EOL;
print mb_ereg_replace_callback(
    "\w+",
    function ($matches) {
        return mb_strtoupper($matches[0]);
    },
    $text
);

print PHP_EOL;
