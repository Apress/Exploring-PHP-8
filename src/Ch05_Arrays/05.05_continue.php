<?php

$albums = [
    ['title' => 'Number of the Beast', 'artist' => 'Iron Maiden'],
    ['title' => 'Whatever', 'artist' => 'Some other band'],
    ['title' => 'Wasted Years', 'artist' => 'Iron Maiden'],
];

foreach ($albums as $album)  {
    if ($album['artist'] !== 'Iron Maiden') {
        continue;
    }

    print "{$album['title']} is an Iron Maiden album.\n";
}
