<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);

$filter = new \Twig\TwigFilter('addcat', function ($string) {
    return $string . "... and Jess the cat. Meow.";
});

$twig->addFilter($filter);

print $twig->render('add-cat.html.twig');
