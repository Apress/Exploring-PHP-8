<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method !== 'GET') {
    print "HTTP request method not allowed: {$method}" . PHP_EOL;
} else {
    print "HTTP request method: {$method}" . PHP_EOL;
}
