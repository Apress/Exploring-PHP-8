<?php

$name = "Hello, \u{141}ukasz!"; // \u{141} = UTF-8 0xC5 0x81

print substr($name, -7) . PHP_EOL;

print bin2hex("\u{141}ukasz") . PHP_EOL;
print bin2hex(substr("\u{141}ukasz", 1)) . PHP_EOL;
