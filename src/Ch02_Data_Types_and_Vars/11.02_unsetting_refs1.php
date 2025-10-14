<?php

$a = 'a val';
$aRef = &$a;

unset($aRef);
var_dump($aRef);
var_dump($a);
