<?php

var_dump(strcmp("abc\x00a", "abc\x00z"));
var_dump(strnatcmp("abc\x00123", "abc\x00125"));
var_dump(strcasecmp("ABC\x00125", "abc\x00123"));
var_dump(strnatcasecmp("abc\x00M4", "abc\x00M11"));
