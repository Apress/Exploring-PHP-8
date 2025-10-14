<?php

function addCar ($inputArr) {
    $inputArr[] = 'Scirocco';
}

$cars = ['Golf', 'Polo'];
addCar($cars);

print_r($cars);