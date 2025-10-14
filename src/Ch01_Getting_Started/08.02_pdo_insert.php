<?php

$pdo = new PDO(
    'mysql:host=host.docker.internal;port=3306;dbname=testdb',
    'root',
    'root123'
);

$pdo->exec("INSERT INTO test(`message`) VALUES('some text')");
$pdo->exec("INSERT INTO test(`message`) VALUES('some more text')");
$pdo->exec("INSERT INTO test(`message`) VALUES('even more text')");
