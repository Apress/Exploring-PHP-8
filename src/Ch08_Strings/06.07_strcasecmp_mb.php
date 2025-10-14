<?php

$A = "\u{41}"; // Unicode codepoint for A
$a = "\u{61}"; // a

$latinCapital_L_WithStroke = "\u{141}"; // Ł
$latinSmall_L_WithStroke = "\u{142}"; // ł

var_dump(strcasecmp($A, $a));
var_dump(strcasecmp(
    $latinCapital_L_WithStroke,
    $latinSmall_L_WithStroke
));
