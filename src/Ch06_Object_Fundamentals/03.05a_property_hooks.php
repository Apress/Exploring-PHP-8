<?php

class Lebowski
{
    public bool $isBowling = false;

    public string $status = 'is being very undude' {
        get {
            return ($this->isBowling) ? 'abides' : $this->status;
        }
        set (string $status) {
            $this->status = $status;
        }
    }

    public function printStatus(): void
    {
        print "The dude {$this->status}" . PHP_EOL;
    }
}

$lebowski = new Lebowski();
print "The dude {$lebowski->status}" . PHP_EOL;

$lebowski->status = 'is out of his element';
$lebowski->printStatus();

$lebowski->isBowling = true;
print "The dude {$lebowski->status}" . PHP_EOL;
