<?php

function knowYourClassicMetal(string $album, string $artist, string $year, string $label): void
{
    print "{$album} by {$artist}, released in {$year} on {$label}" . PHP_EOL;
}

knowYourClassicMetal(...['album' => 'Master of Puppets', 'artist' => 'Metallica', 'year' => '1986', 'label'=> 'Elektra Records']);
knowYourClassicMetal(...['Master of Puppets', 'artist' => 'Metallica', 'year' => '1986', 'label'=> 'Elektra Records']);
knowYourClassicMetal(...['album' => 'Master of Puppets', 'artist' => 'Metallica', 'year' => '1986', 'Elektra Records']);