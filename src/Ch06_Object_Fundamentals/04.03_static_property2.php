<?php

class Counter
{
    private static int $count = 0;

    public function getCount(): int
    {
        return $this::$count++;
    }
}

$counter1 = new Counter();
$counter2 = new Counter();

print "counter1 has count: " . $counter1->getCount() . PHP_EOL;
print "counter2 has count: " . $counter2->getCount() . PHP_EOL;
print "counter1 has count: " . $counter1->getCount() . PHP_EOL;
