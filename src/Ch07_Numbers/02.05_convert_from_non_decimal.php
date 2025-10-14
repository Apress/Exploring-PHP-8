<?php

var_dump(bindec('11011000001'));
var_dump(bindec('0b11011000001'));
var_dump(octdec('3301'));
var_dump(octdec('0o3301'));
var_dump(hexdec('6C1'));
var_dump(hexdec('0x6C1'));
var_dump(hexdec('Z6c1')); // deprecated in PHP >= 7.4