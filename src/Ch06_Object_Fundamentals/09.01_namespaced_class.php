<?php

namespace Fink {
    class QuoteBot
    {
        public static function insight(): void
        {
            print "I've always found that writing comes from a great inner pain." . PHP_EOL;
        }
    }
}

namespace Lebowski {
    class QuoteBot
    {
        public static function insight(): void
        {
            print "...dude, let's go bowling." . PHP_EOL;
        }
    }
}

namespace {
    \Fink\QuoteBot::insight();
    \Lebowski\QuoteBot::insight();
}
