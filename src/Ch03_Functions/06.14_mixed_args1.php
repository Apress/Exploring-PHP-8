<?php

function knowYourClassicMetal(string $album, string $artist, string $year, string $label): void
{
    print "{$album} by {$artist}, released in {$year} on {$label}" . PHP_EOL;
}

knowYourClassicMetal('Painkiller', 'Judas Priest', year: '1990', label: 'Columbia Records');
