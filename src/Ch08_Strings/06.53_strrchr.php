<?php

$ships = 'NCC-1701-B NCC-1701-C NCC-1701-D';
print strrchr($ships, 'NCC') . PHP_EOL;
print strrchr($ships, 'NCC', true) . PHP_EOL;
