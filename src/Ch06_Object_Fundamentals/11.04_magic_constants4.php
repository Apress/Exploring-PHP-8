<?php

namespace Fillory {
    trait Niffin
    {
        public function debug(): void
        {
            print __TRAIT__ . PHP_EOL;
            print __CLASS__ . PHP_EOL;
            print __METHOD__ . PHP_EOL;
        }
    }
}

namespace TheRealWorld {
    class Alice
    {
        use \Fillory\Niffin;
    }

    $magician = new Alice();
    $magician->debug();
}
