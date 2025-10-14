<?php

namespace Other {
    $val = 'I am everywhere' . PHP_EOL;

    function greetings(): void
    {
        print "I am also everywhere, but did you get my name right?" . PHP_EOL;
    }
}

namespace {
    print $val;
    \Other\greetings();
    greetings();
}
