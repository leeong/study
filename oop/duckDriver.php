<?php

use oop\Duck\Behavior\Fly\FlyNoway;
use oop\Duck\Behavior\Fly\FlyWithWings;
use oop\Duck\Behavior\Quack\MuteQuack;
use oop\Duck\Behavior\Quack\Quack;
use oop\Duck\Behavior\Quack\Squeak;
use oop\Duck\Duck\DecoyDuck;
use oop\Duck\Duck\MallardDuck;
use oop\Duck\Duck\RedheadDuck;
use oop\Duck\Duck\RubberDuck;

require_once '../vendor/autoload.php';


class duckDriver
{
    public function run()
    {
        // 红头鸭
        $duck = new RedheadDuck();
        $duck->setFlyBehavior(new FlyWithWings());
        $duck->setQuackBehavior(new Quack());
        $duck->display();
        $duck->performFly();
        $duck->performQuack();

        // 绿头鸭
        $duck = new MallardDuck();
        $duck->setFlyBehavior(new FlyWithWings());
        $duck->setQuackBehavior(new Quack());
        $duck->display();
        $duck->performFly();
        $duck->performQuack();

        // 橡皮鸭
        $duck = new RubberDuck();
        $duck->setFlyBehavior(new FlyNoway());
        $duck->setQuackBehavior(new Squeak());
        $duck->display();
        $duck->performFly();
        $duck->performQuack();

        // 诱饵鸭
        $duck = new DecoyDuck();
        $duck->setFlyBehavior(new FlyNoway());
        $duck->setQuackBehavior(new MuteQuack());
        $duck->display();
        $duck->performFly();
        $duck->performQuack();
    }
}

$test = new duckDriver();
$test->run();
