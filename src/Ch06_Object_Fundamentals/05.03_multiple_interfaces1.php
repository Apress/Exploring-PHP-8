<?php

function debugCrew(Countable&JsonSerializable $crew): void
{
    print "\$crew contains " . count($crew) . " officers." . PHP_EOL;
    print json_encode($crew, JSON_PRETTY_PRINT) . PHP_EOL;
}

class CrewDataWrapper implements Countable, JsonSerializable
{
    public function __construct(private array $data)
    {
    }

    public function count(): int
    {
        return count($this->data);
    }

    public function jsonSerialize(): mixed
    {
        ksort($this->data);
        return $this->data;
    }
}

$crew = new CrewDataWrapper([
    'major' => 'Kira',
    'general' => 'Martok',
    'captain' => 'Sisko',
    'doctor' => 'Bashir',
]);

debugCrew($crew);
