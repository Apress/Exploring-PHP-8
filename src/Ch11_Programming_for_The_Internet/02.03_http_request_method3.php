<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method !== 'GET') {
    http_response_code(405);
    print "HTTP request method not allowed: {$method}" . PHP_EOL;
} else {
    http_response_code(200);
    print "HTTP request method: {$method}" . PHP_EOL;
}
