<?php

$var = 42;
print match (true) {
    $var < 10 => 'low',
    $var === 42 => 'Life the universe and everything',
    $var < 100 => 'high',
};

print PHP_EOL;
