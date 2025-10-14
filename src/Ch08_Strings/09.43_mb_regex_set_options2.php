<?php

mb_ereg_search_init('apples and pears and apples and pears');
print mb_ereg_search_regs('(?:apples|pears|and| )+?')[0] . PHP_EOL;
mb_ereg_search_setpos(0);
print mb_ereg_search_regs('(?:apples|pears|and| )+?', 'l')[0];

print PHP_EOL;
