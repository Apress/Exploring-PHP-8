<?php

$opts = ['http' => [
    'method' => 'GET',
    'header' => [
        'User-Agent: PHP',
        'X-Foo: foo',
        'X-Foo: bar',
    ],
]];

$res = file_get_contents(
    filename: 'http://localhost:8080/index.php',
    context: stream_context_create($opts)
);

var_dump($res);
