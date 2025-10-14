<?php

$lebowski = new stdClass();
$lebowski->hates = 'The Eagles';

$lebowski->getMusicTaste = function () {
    echo "I really hate {$this->hates}, man.";
};

($lebowski->getMusicTaste)();
