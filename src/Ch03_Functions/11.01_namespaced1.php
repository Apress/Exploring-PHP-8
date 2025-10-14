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
        print "Hello from Other\\Sub namespace." . PHP_EOL;
    }
}

namespace {
    collision();
}

namespace Other {
    collision();
}

namespace Other\Sub {
    collision();
}

namespace Other\New {
    collision();
}