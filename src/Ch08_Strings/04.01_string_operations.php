<?php

$hello = "Hello";
$space = "\x20";
$world = "World";
$exclamation = "\x21";

$concat = $hello . $space . $world . $exclamation ;
var_dump($concat);
var_dump(bin2hex($concat));
