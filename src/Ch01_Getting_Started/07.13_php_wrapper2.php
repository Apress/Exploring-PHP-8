<?php

$handle = fopen('php://memory', 'r+');
fputs($handle, 'Live long and prosper.');
rewind($handle);
print stream_get_contents($handle);
fclose($handle);

print PHP_EOL;
