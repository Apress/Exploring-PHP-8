<?php

$binaryStr = "ab\x00cdef";
var_dump(strspn($binaryStr, "a\x00bc"));
var_dump(strcspn($binaryStr, "def"));