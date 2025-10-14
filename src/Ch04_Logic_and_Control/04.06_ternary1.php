<?php

$test = false;

if ($test === false) {
    $val = 'default';
} else {
    $val = $test;
}

var_dump($val);