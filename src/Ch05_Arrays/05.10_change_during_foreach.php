<?php

$arr = [1, 2, 3];
foreach ($arr as $ele) {
    $ele++;
}
print_r($arr);

foreach ($arr as &$ele) {
    $ele++;
}
print_r($arr);