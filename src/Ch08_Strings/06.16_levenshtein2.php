<?php

$insertCost = 2;
$replaceCost = 2;
$deleteCost = 1;

var_dump(levenshtein('status', 'statu',
    $insertCost,
    $replaceCost,
    $deleteCost
));
var_dump(levenshtein('status', 'statue',
    $insertCost,
    $replaceCost,
    $deleteCost
));
