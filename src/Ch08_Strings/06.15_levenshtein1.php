<?php

var_dump(levenshtein('Hello world', 'Hello world'));
var_dump(levenshtein('Hello WORLD', 'Hello world'));
var_dump(levenshtein('status', 'stats'));
