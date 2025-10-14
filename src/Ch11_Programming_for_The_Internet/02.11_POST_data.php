<?php

print "<pre>\n";
var_dump($_SERVER['HTTP_CONTENT_TYPE']);
print PHP_EOL;
var_dump(file_get_contents('php://input'));
print PHP_EOL;
var_dump($_POST);
print "</pre>\n";
