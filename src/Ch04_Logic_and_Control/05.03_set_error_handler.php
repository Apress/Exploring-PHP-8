<?php

error_reporting(E_ALL);
set_error_handler(function ($errno, $errstr, $file, $line) {
    switch ($errno) {
        case E_WARNING:
            print "WARNING!!! {$errstr}" . PHP_EOL;
            break;
        case E_USER_NOTICE:
            print "Just a notice... {$errstr}" . PHP_EOL;
            break;
    }
    print "{$file} : {$line}" . PHP_EOL;

    return true;
}, E_WARNING | E_USER_NOTICE);

print $undef;
trigger_error("TRIGGERED NOTICE", E_USER_NOTICE);
trigger_error("TRIGGERED WARNING", E_USER_WARNING);

print PHP_EOL;
