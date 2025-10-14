<?php

$book = 'ISBN-978-1484267905 PHP 8 Objects, Patterns, and Practice';
var_dump(strspn($book, '.-BINS0123456789'));
var_dump(strspn($book, 'SBN'));
