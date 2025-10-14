<?php

$pdo = new PDO(
    'mysql:host=host.docker.internal;port=3306;dbname=testdb',
    'root',
    'root123'
);

$stmt = $pdo->query('SELECT * FROM test');
var_dump($stmt);

foreach ($stmt as $item) {
    print "id: {$item['id']}, message: {$item['message']}" . PHP_EOL;
}
//$stmt->execute();