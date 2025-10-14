<?php

session_start();

$_SESSION['data'] = [
    'cat' => 'Jess',
    'humans' => [
        'Anna',
        'Paul'
    ]
];

var_dump(serialize($_SESSION['data']));
