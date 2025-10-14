<?php

$tele = new stdClass();
$tele->model = 'Fender Telecaster';
$tele->year = 1958;

$strat = new stdClass();
$strat->model = 'Fender Stratocaster';
$strat->year = 1962;

$jem = new stdClass();
$jem->model = 'Ibanez Jem 777';
$jem->year = 1988;

$guitArr = [$strat, $jem, $tele];

usort($guitArr, function ($a, $b) {
    return $a->year <=> $b->year;
});

print_r($guitArr);
