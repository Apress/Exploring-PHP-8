<?php

$ship = 'Registration: NCC-1701-D';
print strstr($ship, 'NCC') . PHP_EOL;
var_dump(strstr($ship, 'ncc'));
print stristr($ship, 'ncc') . PHP_EOL;
