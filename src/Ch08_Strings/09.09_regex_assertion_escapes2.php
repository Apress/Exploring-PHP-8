<?php

$text = '... I found a human foot ...';

function dumpMatches(array $arr): void {
    foreach ($arr[0] as $match) {
        print bin2hex($match) . PHP_EOL;
    }
    print PHP_EOL;
}

preg_match_all('/\w\b/', $text, $matches);
dumpMatches($matches);

preg_match_all('/\w /', $text, $matches);
dumpMatches($matches);
