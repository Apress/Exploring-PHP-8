<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);

$func = new \Twig\TwigFunction('add_humans', function ($string) {
    return $string . " is in charge. Anna and Paul are her slaves.";
});

$twig->addFunction($func);

print $twig->render('add-humans.html.twig', [
    'cat' => 'Jess'
]);
