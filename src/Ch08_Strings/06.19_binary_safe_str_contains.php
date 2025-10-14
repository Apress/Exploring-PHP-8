<?php

$text = "Let's go \x00 skiing!";

var_dump(str_contains($text, "go \x00 skiing"));
var_dump(str_contains($text, "go \x00 snowboarding"));
