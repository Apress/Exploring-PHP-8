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

namespace Other {
    collision();
    \collision();
}

namespace Other {
    Sub\collision(); // qualified - namespace path is relative to current
    \Other\Sub\collision(); // fully qualified - namespace path starts from root
}