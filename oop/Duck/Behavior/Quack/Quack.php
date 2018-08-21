<?php

namespace oop\Duck\Behavior\Quack;

use oop\Duck\Behavior\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "嘎嘎叫\n";
    }
}