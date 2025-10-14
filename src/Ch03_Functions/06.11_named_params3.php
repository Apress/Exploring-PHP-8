<?php

function knowYourClassicMetal(string $album, string $artist, string $year, string $label): void
{
    print "{$album} by {$artist}, released in {$year} on {$label}" . PHP_EOL;
}

$data = [
    'year' => '1995',
    'label' => 'Earache',
    'album' => 'Slaughter of the Soul',
    'artist' => 'At the Gates',
];

knowYourClassicMetal(...$data);
