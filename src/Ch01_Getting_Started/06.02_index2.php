<?php

$sapi = PHP_SAPI;

print <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Old school PHP</title>
</head>
<body>
    <p>This entire document was created with PHP SAPI: <pre>{$sapi}</pre></p>
</body>
</html>
HTML;
