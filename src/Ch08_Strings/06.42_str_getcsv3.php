<?php

$csvRow3 = 'Iain M. Banks,';
$csvRow3 .= '"""Jernau Gurgeh,"" the machine said, making a sighing noise, ""a guilty system recognizes no innocents..."""';

print_r(str_getcsv($csvRow3, escape: '\\'));
