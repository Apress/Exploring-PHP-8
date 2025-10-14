<?php

namespace Application {
    class SomeClass
    {
    }

    trait SomeTrait
    {
    }

    interface SomeInterface
    {
    }

    enum SomeEnum
    {
    }
}

namespace {
    var_dump(class_exists('Application\SomeClass'));
    var_dump(trait_exists('Application\SomeTrait'));
    var_dump(interface_exists('Application\SomeInterface'));
    var_dump(enum_exists('Application\SomeEnum'));
}
