<?php

namespace Application {
    trait SomeTrait
    {
    }

    enum SomeEnum
    {
    }
}

namespace {
    print_r(get_declared_classes());
    print_r(get_declared_interfaces());
    print_r(get_declared_traits());
}
