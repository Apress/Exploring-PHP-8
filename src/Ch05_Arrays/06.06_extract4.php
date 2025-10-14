<?php

$arr = [
    'name' => 'Bob',
    'age' => 'Forty-seven',
    'favouriteToy' => 'Benelli M4 Tactical',
];

extract($arr, EXTR_REFS|EXTR_PREFIX_ALL, 'rusty');

$rusty_name = 'Russell';
$rusty_age = 'Eleven';
$rusty_favouriteToy = 'Action Mans';

var_dump($arr);
