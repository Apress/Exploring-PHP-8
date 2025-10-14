<?php

$text = 'http://www.iloveregex.com/';
var_dump(preg_match('/http:\/\/www/', $text));
var_dump(preg_match('#http://www#', $text));
