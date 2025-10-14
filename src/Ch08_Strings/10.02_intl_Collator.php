<?php

$collator = new Collator('pl_PL.UTF-8');

$polishNames = [
    "Łukasz",
    "Marcin",
    "Tomasz",
];

$collator->sort($polishNames);
print_r($polishNames);
