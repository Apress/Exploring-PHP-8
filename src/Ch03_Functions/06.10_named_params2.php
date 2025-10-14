<?php

function knowYourClassicMetal(array $data): void
{
    print "{$data['album']} by {$data['artist']}, released in {$data['year']} on {$data['label']}" . PHP_EOL;
}

knowYourClassicMetal([
    'album' => 'Somewhere in Time',
    'artist' => 'Iron Maiden',
    'year' => '1985',
    'label' => 'EMI'
]);
