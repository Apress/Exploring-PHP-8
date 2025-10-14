<?php

$handle = fopen('https://github.com', 'r');
$text = '';
while (!feof($handle)) {
    $text .= fgets($handle);
}
var_dump(memory_get_usage());
