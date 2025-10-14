<?php

mb_internal_encoding("UTF-8");
print bin2hex(mb_convert_encoding(
    "\x01\x41\x00\x75\x00\x6b\x00\x61\x00\x73\x00\x7a",
    to_encoding: 'UTF-8',
    from_encoding: 'UTF-16BE'
));

print PHP_EOL;
