<?php

setcookie(
    name: 'flavour',
    value: 'choc chip obvs',
    expires_or_options: time() + 3600,
);
print "Thanks for visiting!\n";
