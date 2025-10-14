<?php

print "HTTP Status Code was " . http_response_code() . "\n";
print "But I don't like you so you are forbidden.\n";

http_response_code(403);
