<?php

namespace oop\Duck\Behavior\Fly;

use oop\Duck\Behavior\FlyBehavior;

class FlyNoway implements FlyBehavior
{
    public function fly()
    {
        echo "不能飞\n";
    }
}