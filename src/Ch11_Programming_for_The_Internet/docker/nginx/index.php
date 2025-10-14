<?php

$routes = [
    'new.article' => [
        'method' => 'POST',
        'pattern' => '/^\/article$/',
    ],
    'read.article' => [
        'method' => 'GET',
        'pattern' => '/^\/article\/\d*$/',
    ]
];

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$matchedRoute = match_route($routes, $uri, $method);

print "HTTP Method: '{$method}'" . PHP_EOL;
print "Requested resource path is '{$uri}'" . PHP_EOL;
print "Matched resource path and method to route '{$matchedRoute}'" . PHP_EOL;

function match_route(array $routes, string $uri, string $method): ?string
{
    foreach ($routes as $route => $meta) {
        if (
            $meta['method'] === $method &&
            preg_match($meta['pattern'], $uri)
        ) {
            return $route;
        }
    }

    return null;
}
