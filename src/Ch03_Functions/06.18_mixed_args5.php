<?php

function knowYourClassicMetal(string $album, string $artist, string $year, string $label): void
{
    print "{$album} by {$artist}, released in {$year} on {$label}" . PHP_EOL;
}

$albumAndArtist = ['Left Hand Path', 'Entombed'];

knowYourClassicMetal(...$albumAndArtist, year: '1990', label: 'Combat Records');
