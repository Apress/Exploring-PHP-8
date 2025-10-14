<?php

$myArr = ['Alice', 'Bob', 'Russell', 'Rita', 'Sue'];

foreach ($myArr as $name) {
    if ($name === 'Russell') {
        // Pretend something went horribly wrong with Russell
        print "{$name} went so wrong that we can't continue :(\n";
        break;
    }

    print "{$name} is fine.\n";
}
