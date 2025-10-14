<?php

$name = "\u{C7}a\u{11F}ari";
var_dump(substr_count($name, 'a'));
var_dump(substr_count($name, "\u{C7}"));
