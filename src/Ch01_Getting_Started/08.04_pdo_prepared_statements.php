<?php

$pdo = new PDO(
    'mysql:host=host.docker.internal;port=3306;dbname=testdb',
    'root',
    'root123'
);

$stmt = $pdo->prepare('SELECT message FROM test WHERE id = :id');
$id = 3;
$stmt->bindParam(':id', $id);
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
