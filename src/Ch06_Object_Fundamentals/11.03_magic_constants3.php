<?php

namespace Brakebills {
    class Magician
    {
        public function debug(): void
        {
            print __NAMESPACE__ . PHP_EOL;
        }
    }
}

namespace Fillory {
    class Quentin extends \Brakebills\Magician
    {
    }

    $magician = new Quentin();
    $magician->debug();
}
