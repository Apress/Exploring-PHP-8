<?php

var_dump(strlen("A\x00 null byte."));
var_dump(strcoll("abc", "abc\x00def")); // NOT binary safe
var_dump(strcmp("abc", "abc\x00def"));
