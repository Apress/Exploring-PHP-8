<?php

$str = '"&\'<>£¥©®';

print htmlspecialchars($str) . PHP_EOL;
print htmlentities($str);

print PHP_EOL;
