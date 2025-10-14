<?php

$lat = 'ABCDE';
$pol = 'AĄBCĆ';

var_dump(strlen($lat));
var_dump(strlen($pol));

var_dump(bin2hex($lat));
var_dump(bin2hex($pol));
