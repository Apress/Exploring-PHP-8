<?php

print "<pre>\n";
$json = file_get_contents('php://input');
$requestData = json_decode($json, true);
var_dump($requestData);
print "</pre>\n";
