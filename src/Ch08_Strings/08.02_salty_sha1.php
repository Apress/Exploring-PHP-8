<?php

$password = 'weaksauce';

print sha1($password . random_bytes(8)) . PHP_EOL;
print sha1($password . random_bytes(8));

print PHP_EOL;
