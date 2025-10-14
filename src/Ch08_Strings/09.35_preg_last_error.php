<?php

$text = 'foobar foobar foobar';
preg_match('/(?:\D+|<\d+>)*[!?]/', $text);
if (preg_last_error() !== PREG_NO_ERROR) {
    print preg_last_error_msg();
}

print PHP_EOL;
