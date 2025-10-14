<?php

function increment(int $num): int {
    var_dump($num);
    return $num + 1;
}

print increment('2') . PHP_EOL;
