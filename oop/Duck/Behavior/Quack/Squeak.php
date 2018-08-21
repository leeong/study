<?php

namespace oop\Duck\Behavior\Quack;

use oop\Duck\Behavior\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "吱吱叫\n";
    }
}