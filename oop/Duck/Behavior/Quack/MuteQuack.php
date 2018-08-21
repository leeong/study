<?php

namespace oop\Duck\Behavior\Quack;

use oop\Duck\Behavior\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "不能叫\n";
    }
}