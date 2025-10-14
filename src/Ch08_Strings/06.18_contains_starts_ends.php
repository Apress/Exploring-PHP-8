<?php

$text = "The skiing in Turkey is very well-kept secret. \u{1F970} \u{1F3BF} Kartalkaya \u{1F3BF} \u{1F970}";

var_dump(str_contains($text, "skiing in Turkey"));
var_dump(str_contains($text, "\u{1F3BF}"));
var_dump(str_starts_with($text, "The"));
var_dump(str_starts_with($text, "skiing"));
var_dump(str_ends_with($text, "\u{1F970}"));

