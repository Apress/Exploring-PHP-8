<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/cache',
]);

print $twig->render('my-first.html.twig', [
    'title' => 'RENDERED WITH TWIG'
]);
