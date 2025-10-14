<?php

$str = '"&\'<>£¥©®';

var_dump(filter_var($str, FILTER_SANITIZE_SPECIAL_CHARS));
var_dump(filter_var($str, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
