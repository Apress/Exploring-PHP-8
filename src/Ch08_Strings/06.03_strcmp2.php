<?php

$m4  = "\x4d\x34";
$m1  = "\x4d\x31";
$m11 = "\x4d\x31\x31";
$m18 = "\x4d\x31\x38";

var_dump(strcmp($m4, $m11));
var_dump(strcmp($m4, $m18));
var_dump(strcmp($m11, $m18));
var_dump(strcmp($m1, $m11));
