<?php

$name = "Hello, \u{141}ukasz!"; // \u{141} = UTF-8 0xC5 0x81

print mb_substr($name, -7) . PHP_EOL;
