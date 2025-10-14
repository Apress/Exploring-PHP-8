<?php

$val = $notDeclared ?? 'default';
var_dump($val);

print PHP_EOL;

$val = $notDeclared ?? $stillNotDeclared ?? 'default';
var_dump($val);

print PHP_EOL;

$val = (isset($notDeclared)) ?: 'default';
var_dump($val);
