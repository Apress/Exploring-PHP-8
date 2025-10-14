<?php

$response = '<!DOCTYPE html><html><head></head><body>Lots of lovely content.</body></html>';

$contentLength = strlen($response);
var_dump($contentLength);

var_dump(strlen("abc\x00def"));
