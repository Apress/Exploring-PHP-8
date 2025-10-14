<?php

require_once __DIR__ . '/vendor/autoload.php';

use Twig\Extra\Html\HtmlExtension;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);
$twig->addExtension(new HtmlExtension());

$state = new stdClass();
$state->errors = false;
$state->focused = true;

print $twig->render('html-classes.html.twig', [
    'classList' => [
        'flex', 'centered',
    ],
    'state' => $state,
]);
