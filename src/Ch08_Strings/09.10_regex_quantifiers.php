<?php

preg_match_all('/\d+/', '12345', $matches);
print_r($matches[0]);

print PHP_EOL;

preg_match_all('/\d+?/', '12345', $matches);
print_r($matches[0]);
