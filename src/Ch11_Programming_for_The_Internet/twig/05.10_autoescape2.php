<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader, [
    'autoescape' => false,
]);

print $twig->render('escape.css.twig', [
    'selector' => 'body > main .link',
]);

print PHP_EOL;

print $twig->render('html-attr-escape.html.twig', [
    'srcAttr' => 'x" onerror"=alert(\'script injection\')"'
]);
