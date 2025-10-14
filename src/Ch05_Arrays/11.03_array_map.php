<?php

$cars = [
    [
        ['make', 'VW'], ['model', 'Golf GTI']
    ],
    [
        ['make', 'VW'], ['model', 'Corrado VR6']
    ]
];
$values = [
    20000,
    12000
];

$newCars = array_map(function (array $car, int $value): array {
    return [
        $car[0][0] => $car[0][1],
        $car[1][0] => $car[1][1],
        'value' => $value,
    ];
}, $cars, $values);

print_r($newCars);
