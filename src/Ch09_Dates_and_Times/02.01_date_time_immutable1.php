<?php

$dt = new DateTime();
var_dump($dt->getTimestamp());
$dt->modify('+1 day');
var_dump($dt->getTimestamp());

print PHP_EOL;;

$dti = new DateTimeImmutable();
var_dump($dti->getTimestamp());
$dti->modify('+1 day');
var_dump($dti->getTimestamp());
