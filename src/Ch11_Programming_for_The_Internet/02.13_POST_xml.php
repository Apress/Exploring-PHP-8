<?php

print "<pre>\n";
$requestBody = file_get_contents('php://input');
$xml = new SimpleXMLElement($requestBody);
var_dump($xml->children());
print "</pre>\n";
