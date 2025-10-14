<?php

$mijRG = 'Ibanez RG 550 Genesis'; // seriously good VFM this one ;)

/*
 *  signature is substr_compare($string1, $string2, $offset, $length = null, $caseInsensitive = false);
 */

// search 'Ibanez' for 'Ibanez'
var_dump(substr_compare($mijRG, 'Ibanez', 0, 6));
// search 'Ibanez' for 'RG 550'
var_dump(substr_compare($mijRG, 'RG 550', 0, 6));
// search 'RG 550' for 'RG 550'
var_dump(substr_compare($mijRG, 'RG 550', 7, 6));

// negative offset counts from end of string
var_dump(substr_compare($mijRG, '0 Genesis', -9, 9));
// turn off case sensitivity
var_dump(substr_compare($mijRG, '0 gEnEsIs', -9, 9, true));

// always specify a length, this compares 'Ibanez' to whole of $mijRG
var_dump(substr_compare($mijRG, 'Ibanez', 0));