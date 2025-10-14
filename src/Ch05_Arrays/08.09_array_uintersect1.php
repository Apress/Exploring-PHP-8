<?php

$advertised = [
    [
        'registration' => 'AAA 1A',
        'model' => 'Ford Prefect'
    ],
    [
        'registration' => 'BBB 1B',
        'model' => 'Vauxhall Viva'
    ],
];

$outForRepair = [
    [
        'registration' => 'AAA 1A',
        'fault' => 'Missing towel',
    ]
];

$deListUntilRepaired = array_uintersect($advertised, $outForRepair, function ($ads, $reps) {
    return $ads['registration'] <=> $reps['registration'];
});

print_r($deListUntilRepaired);
