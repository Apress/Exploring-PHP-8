<?php

$csvRow4 = 'binary' . "\x00" . 'safe_field'
    . ',we"ird"_fi"eld"_1' // multiple enclosure chars mid-data, not wrapped
    . ',"we"ird"_fi"eld"_2"' // multiple enclosure chars wrapped between RFC-compliant enclosures
    . ',"we\"ird\"_fi\"eld\"_3"' // slash-escaped enclosures between RFC-compliant enclosures
;
print_r(str_getcsv($csvRow4, escape: '\\'));
