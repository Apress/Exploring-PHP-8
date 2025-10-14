<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader, [
    'autoescape' => false,
]);

$postData = [
    'title' => 'Lulzsec',
    'name' => 'Mr Trustworthy',
    'age' => 49,
    'occupation' => '<script>window.alert("I control the browser now.")</script>',
];

print $twig->render('auto-filter.html.twig', [
    'postData' => $postData
]);
