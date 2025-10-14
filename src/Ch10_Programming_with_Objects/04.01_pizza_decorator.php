<?php

interface PizzaInterface
{
    public function getDescription(): string;
    public function getCost(): float;
}

class Pizza implements PizzaInterface
{
    public function getDescription(): string
    {
        return 'Our famous pizza';
    }

    public function getCost(): float
    {
        return 10.99;
    }
}

abstract class PizzaDecorator implements PizzaInterface
{
    public function __construct(
        protected PizzaInterface $decoratedPizza
    ) {
    }

    abstract public function getDescription(): string;
    abstract public function getCost(): float;
}

class BlueCheeseDecorator extends PizzaDecorator
{
    public function getDescription(): string
    {
        return $this->decoratedPizza->getDescription() . ', with blue cheese';
    }

    public function getCost(): float
    {
        return $this->decoratedPizza->getCost() + 2.50;
    }
}

class TruffleDecorator extends PizzaDecorator
{
    public function getDescription(): string
    {
        return $this->decoratedPizza->getDescription() . ', with truffle shavings';
    }

    public function getCost(): float
    {
        return $this->decoratedPizza->getCost() + 3.50;
    }
}

$orderOne = new BlueCheeseDecorator(new Pizza());
$orderTwo = new TruffleDecorator(new BlueCheeseDecorator(new Pizza()));

print $orderOne->getDescription() . '. Costs ' . $orderOne->getCost() . PHP_EOL;
print $orderTwo->getDescription() . '. Costs ' . $orderTwo->getCost() . PHP_EOL;
