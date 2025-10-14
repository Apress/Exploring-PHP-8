<?php

$callbacks = [
    '/\d+/' => function (array $matches): string {
        return number_format($matches[0], thousands_separator: ',');
    },
    '/\w+/' => function (array $matches): string {
        return strtoupper($matches[0]);
    },
];
print preg_replace_callback_array($callbacks, 'PoWeR LeVeL: 9001');

print PHP_EOL;
