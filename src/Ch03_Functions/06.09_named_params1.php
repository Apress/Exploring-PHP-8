<?php

function knowYourClassicMetal(string $album, string $artist, string $year, string $label): void
{
    print "{$album} by {$artist}, released in {$year} on {$label}" . PHP_EOL;
}

knowYourClassicMetal(album: 'Somewhere in Time', artist: 'Iron Maiden', year: '1985', label: 'EMI');
knowYourClassicMetal(artist: 'Slayer', year: '1986', label: 'Def Jam', album: 'Reign in Blood');
