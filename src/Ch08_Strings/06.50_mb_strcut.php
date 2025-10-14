<?php

print bin2hex("\u{141}ukasz") . PHP_EOL;
print bin2hex(mb_strcut("\u{141}ukasz", 1)) . PHP_EOL;
