<?php

ob_start(function ($buffer) {
    return str_replace('Jess', 'Naughty Jess', $buffer);
});

print "A cat called Jess is begging for food again.\n";
print "This is forbidden.\n";
http_response_code(403);

flush();
