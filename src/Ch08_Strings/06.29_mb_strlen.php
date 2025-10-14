<?php

$mbStr = "\u{1F920}";
var_dump(bin2hex($mbStr));
var_dump(strlen($mbStr));

var_dump(mb_strlen($mbStr));
