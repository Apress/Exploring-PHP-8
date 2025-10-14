<?php

$pdo = new PDO(
    'mysql:host=host.docker.internal;port=3306;dbname=testdb',
    'root',
    'root123'
);

$sql = <<< SQL
CREATE TABLE IF NOT EXISTS `test` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `message` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1
SQL;

$pdo->exec($sql);