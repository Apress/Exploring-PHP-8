<?php

print chunk_split('A string of text', 4);

print PHP_EOL . PHP_EOL;

print wordwrap('A string of text', 4);

print PHP_EOL . PHP_EOL;

print wordwrap("\u{1F3F3}\u{FE0F}\u{200D}\u{1F308} \u{1F3F4}\u{200D}\u{2620}\u{FE0F}", 1);

print PHP_EOL;