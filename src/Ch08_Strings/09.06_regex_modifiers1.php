<?php

var_dump(preg_match('/ToAsT/i', 'toaster'));
var_dump(preg_match('/To A sT/ix', 'toaster'));

print PHP_EOL;

var_dump(preg_match_all('/toast/', 'toaster toaster'));
var_dump(preg_match_all('/toast/A', 'toaster toaster'));
