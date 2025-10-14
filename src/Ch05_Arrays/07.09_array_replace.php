<?php

$carData = ['make' => 'Audi', 'model' => 'Golf', 'variant' => 'VRs'];
$correctData = ['make' => 'VW', 'variant' => 'GTI'];

$carData = array_replace($carData, $correctData);

print_r($carData);
