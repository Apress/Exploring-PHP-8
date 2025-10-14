<?php

$var = 1;
print match ($var) {
    '1' => 'string',
    1 => 'integer',
};

print PHP_EOL;
