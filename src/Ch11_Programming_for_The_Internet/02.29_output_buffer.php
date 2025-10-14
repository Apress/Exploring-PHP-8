<?php

ob_start();
print "HTTP Status Code was " . http_response_code() . "\n";
print "But I don't like you so you are forbidden.\n";
http_response_code(403);

print "While we're at it let's sort that X- header out.\n";
header('X-Powered-By: none/of-your-business');
