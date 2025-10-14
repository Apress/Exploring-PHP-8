<?php

$polishChars1 = "\u{141}\u{143}\u{146}";
$polishChars2 = "\u{142}\u{144}\u{145}";

print "Comparing '{$polishChars1}' to '{$polishChars2}'" . PHP_EOL;

var_dump(strcmp(
    mb_strtolower($polishChars1),
    mb_strtolower($polishChars2)
));
