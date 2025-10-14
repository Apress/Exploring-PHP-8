<?php

$advertised = [
    [
        'registration' => 'DDD 1D',
        'model' => 'Vauxhall Viva'
    ],
    [
        'registration' => 'AAA 1A',
        'model' => 'Ford Prefect'
    ],
    [
        'registration' => 'CCC 1C',
        'model' => 'Vauxhall Viva'
    ],
    [
        'registration' => 'BBB 1B',
        'model' => 'Vauxhall Viva'
    ],
];

$outForRepair = [
    [
        'x_registration' => 'AAA 1A',
        'x_fault' => 'Missing towel',
    ]
];

$deListUntilRepaired = array_uintersect($advertised, $outForRepair, function ($ads, $reps) {
    if (isset($reps['x_registration'])) {
        return $ads['registration'] <=> $reps['x_registration'];
    } else {
        return $ads['registration'] <=> $reps['registration'];
    }
});
print_r($deListUntilRepaired);