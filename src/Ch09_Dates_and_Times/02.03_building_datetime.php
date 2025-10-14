<?php

var_dump(
    (new DateTime('01-SEP-2024'))->format('Y-m-d H:i:s')
);
var_dump(
    (new DateTime('3rd September 2024 00:05'))->format('Y-m-d H:i:s')
);

print PHP_EOL;

var_dump(
    (new DateTime('now'))->format('Y-m-d H:i:s')
);
var_dump(
    (new DateTime('today'))->format('Y-m-d H:i:s')
);

print PHP_EOL;

var_dump(
    (new DateTime('today + 1 day'))->format('Y-m-d H:i:s')
);
var_dump(
    (new DateTime('today - 12 hours'))->format('Y-m-d H:i:s')
);
