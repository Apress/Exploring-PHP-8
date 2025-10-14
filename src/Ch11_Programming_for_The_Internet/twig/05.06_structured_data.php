<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$dataObj = new stdClass();
$dataObj->name = "A basic object.";

print $twig->render('structured-data.html.twig', [
    'array_data' => [
        'cat' => 'Jess',
        'humans' => ['Anna', 'Paul'],
    ],
    'object' => $dataObj,
]);
