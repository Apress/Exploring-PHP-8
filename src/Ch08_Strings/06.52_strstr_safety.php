<?php

$ship = "Registration: \x00NCC-1701-D";
print strstr($ship, "\x00NCC") . PHP_EOL;

$name = "Name: \u{141}ukasz";
print strstr($name, "\u{141}") . PHP_EOL;

var_dump(stristr($name, "\u{142}"));
