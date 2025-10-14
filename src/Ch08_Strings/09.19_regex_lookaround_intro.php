<?php

preg_match_all('/[a-zA-Z]+c[^k]/', 'Disc Dock', $matches);
print_r($matches);

print bin2hex($matches[0][0]);

print PHP_EOL;

preg_match_all('/[a-zA-Z]+c[^k]/', 'Dock Disc', $matches);
print_r($matches);

print PHP_EOL;
