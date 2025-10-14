<?php

$keys = [
    'title',
    'year',
];

$albums = [
    ['A Night at the Opera', '1974'],
    ['A Day at the Races', '1975'],
];

$assocArr = [];
foreach ($albums as $album) {
    if (count($keys) === count($album)) {
        $assocArr[] = array_combine($keys, $album);
    }
}

print_r($assocArr);
