<?php

$oldCode = http_response_code();
http_response_code(403);

print "HTTP Status Code was {$oldCode}\n";
print "But I don't like you so you are forbidden.\n";
