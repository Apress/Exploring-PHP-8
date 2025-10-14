<?php

$a = 'a val';
$aRef = &$a;

unset($a);
var_dump($aRef);
var_dump($a);