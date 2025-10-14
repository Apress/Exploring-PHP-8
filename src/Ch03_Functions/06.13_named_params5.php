<?php

function knowYourClassicMetal(string $album, string $artist, string $year, string $label): void
{
    print "{$album} by {$artist}, released in {$year} on {$label}" . PHP_EOL;
}

// legal syntax
knowYourClassicMetal(album: 'Somewhere in Time', artist: 'Iron Maiden', year: '1985', label: 'EMI', artist: 'Iron Maiden');

