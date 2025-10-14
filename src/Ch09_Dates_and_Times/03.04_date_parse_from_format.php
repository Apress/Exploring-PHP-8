<?php

print_r(date_parse_from_format(
    'Y-m-d H:i:s T',
    '2024-09-01 01:02:03 PDT'
));

print PHP_EOL;

print_r(date_parse_from_format(
    'Y-m-d',
    '2024-09-01 01:02:03 PDT'
));
