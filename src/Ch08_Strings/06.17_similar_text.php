<?php

$percentRef = 0.0;
var_dump(similar_text(
    "Hello World",
    "hello world",
    $percentRef
));
print "Strings are {$percentRef}% similar". PHP_EOL;