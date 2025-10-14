<?php

print http_build_query(
    data: [
        'cat' => 'Jess the cat',
        'human' => 'Anna the human'
    ],
    arg_separator: '&',
    encoding_type: PHP_QUERY_RFC3986
);

print PHP_EOL;
