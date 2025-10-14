<?php

$multiArr = [
    ['duck', 'duck'],
    ['duck', 'goose', 'duck'],
    ['duck', 'nuke'],
    ['duck'],
];

foreach ($multiArr as $k => $arr) {
    foreach ($arr as $val) {
        switch ($val) {
            case 'duck':
                print "duck from subArr {$k}" . PHP_EOL;
                break;
            case 'goose':
                print "found a goose moving to subArr ". $k + 1 . PHP_EOL;
                break 2;
            case 'nuke':
                print "BOOM! No more game." . PHP_EOL;
                break 3;
        }
    }
}
