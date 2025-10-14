<?php

var_dump(1 == '1'); // true
var_dump(1 === '1'); // true
var_dump(1 != 1); // false
var_dump(1 !== '1'); // false
var_dump(1 <=> 0); // 1 - left-hand is greater
var_dump(1 <=> 1); // 0 - equal
var_dump(1 <=> 2); // -1 - left-hand is lesser
