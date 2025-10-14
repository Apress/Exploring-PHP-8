<?php

print_r(mb_detect_order()) . PHP_EOL;
print mb_detect_encoding("Single bytes") . PHP_EOL;
print mb_detect_encoding("\u{141}");

print PHP_EOL . PHP_EOL;

// could also be passed in as ['UTF-8', 'ASCII']
mb_detect_order('UTF-8,ASCII') . PHP_EOL;
print_r(mb_detect_order()) . PHP_EOL;
print mb_detect_encoding("Single bytes");

print PHP_EOL;
