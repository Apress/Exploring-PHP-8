<?php

$str = 'Gender: M, Height: 1.85m, Weight: 95kg';
var_dump(sscanf($str, 'Gender: %[^,], Height: %[0-9\.]m, Weight: %[0-9]kg'));
