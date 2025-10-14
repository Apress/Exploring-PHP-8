<?php

$species = "Dentrassis,Dolphins,G'Gugvuntt,Vl'hurgs,Golgafrinchans";
print_r(str_getcsv($species, escape: '\\'));

$species = "Dentrassis|Dolphins|G'Gugvuntt|Vl'hurgs|Golgafrinchans";
print_r(str_getcsv($species, separator: '|', escape: '\\'));
