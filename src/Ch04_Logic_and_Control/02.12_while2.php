<?php

$cliIn = fopen("php://stdin", "r");
while (true) {
    print "Enter 'stop' to terminate" . PHP_EOL;
    $input = fgets($cliIn);
    if (strpos($input, 'stop') !== false) {
        break;
    }
    print "You entered {$input}" . PHP_EOL;
}
fclose($cliIn);
print "Terminating.";

print PHP_EOL;