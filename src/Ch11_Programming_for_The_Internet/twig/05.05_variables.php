<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);
print $twig->render('variables.html.twig', [
    'cat' => 'Jess',
    'set' => 'This is not a good idea.'
]);
