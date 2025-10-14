<?php

$data = [
    'var1' => '&val1',
    'var2' => '&val2',
];

print http_build_query($data);

print PHP_EOL;
