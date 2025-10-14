<?php

$quote = 'We demand rigidly defined areas of doubt and uncertainty!';

var_dump(strpos($quote, 'We demand'));
var_dump(stripos($quote, 'wE dEmAnD'));
var_dump(strpos($quote, 'and'));
var_dump(strrpos($quote, 'and'));
var_dump(strripos($quote, 'AnD'));
var_dump(strpos($quote, 'so long and thanks for all the fish'));
