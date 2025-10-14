<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);

print $twig->render('arrow-func.html.twig', [
    'cat' => 'Jess',
    'human' => 'Anna',
]);
