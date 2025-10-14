<?php

namespace {
    function collision(): void {
        print "Hello from root namespace." . PHP_EOL;
    }
}

namespace Other {
    function collision(): void {
        print "Hello from Other namespace." . PHP_EOL;
    }
}

namespace Other\Sub {
    function collision(): void {
        print "Hello from Other\Sub namespace." . PHP_EOL;
    }
}

namespace Some\Other\Space {
    use function \Other\collision;

    collision();
}

namespace Some\Other\Sub\Space {
    use function \Other\Sub\collision as otherCollision;
    use function \collision as rootCollision;

    otherCollision();
    rootCollision();
}
