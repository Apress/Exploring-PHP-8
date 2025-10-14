<?php

$a = array_pad([0], rand(0, 10), 0);
$b = array_pad([0], rand(0, 10), 0);
$c = array_pad([0], rand(0, 10), 0);

$ordered = [
    'a' => $a,
    'b' => $b,
    'c' => $c,
];

asort($ordered);

foreach ($ordered as $k => $arr) {
    print "\${$k} size is " . sizeof($arr) . "\n";
}
