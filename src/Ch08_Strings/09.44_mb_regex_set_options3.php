<?php

mb_ereg_search_init('@@@ abc');
print_r(mb_ereg_search_pos('[abc]*'));
print_r(mb_ereg_search_pos('[abc]*', 'n'));
