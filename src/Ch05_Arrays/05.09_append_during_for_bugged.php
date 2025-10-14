<?php

$arr = ["Alice", "Bob"];
for ($i = 0; $i < count($arr); $i++) {
    print "Adding a Russell!" . PHP_EOL;
    $arr[] = "Russell";
}
print_r($arr);