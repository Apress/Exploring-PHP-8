<?php

$cars = [
    [
        ['make', 'VW'], ['model', 'Golf GTI']
    ],
    [
        ['make', 'VW'], ['model', 'Corrado VR6']
    ],
];

array_walk($cars, 'applySanity');
print_r($cars);

function applySanity (&$val)
{
    $val = [
        $val[0][0] => $val[0][1],
        $val[1][0] => $val[1][1],
    ];
}
