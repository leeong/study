<?php

namespace oop\Duck\Duck;

use oop\Duck\Behavior\FlyBehavior;
use oop\Duck\Behavior\QuackBehavior;

abstract class Duck
{
    private $flyBehavior;
    private $quackBehavior;

    public function swim()
    {

    }

    public abstract function display();

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
}