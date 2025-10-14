<?php

$tmpFile = $_FILES['file']['tmp_name'];
var_dump(is_uploaded_file($tmpFile));
var_dump(is_uploaded_file('/etc/passwd'));
var_dump(move_uploaded_file($tmpFile, __DIR__ . '/uploaded.jpg'));
var_dump(is_uploaded_file($tmpFile));

//var_dump(file_get_contents('php://input'));
//var_dump($_POST);
