<?php

$ship = "Not Invented\x00 Here";

print strpbrk($ship, "d\x00er") . PHP_EOL;
print strpbrk("\u{142}ukasz, \u{141}ukasz", "\u{141}") . PHP_EOL;
