<?php

$text = 'The cat chased the bird, the dog chased the cat.';
$pattern = '/dog|cat|bird/';
print preg_replace_callback($pattern, function (array $matches): string {
    print 'callback invoked' . PHP_EOL;
    return match ($matches[0]) {
        'dog' => 'black dog',
        'cat' => 'white cat',
        'bird' => 'blue bird',
    };
}, $text);

print PHP_EOL;
