<?php

function collision(): void {
    print "Come at me bro!" . PHP_EOL;
}

if (!function_exists('collision')) {
    function collision(): void {
        print "Critical dodge!";
    }
}

collision();
