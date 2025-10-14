<?php

$staff = ["Alice", "Bob", "Russell"];
$crew = [
    'captain' => 'Sisko',
    'medic' => 'Bashir',
    'engineer' => 'OBrian',
];

unset($staff[0]);
unset($crew['engineer']);
print_r($staff);
print_r($crew);
