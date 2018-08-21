<?php

namespace oop\Duck\Behavior\Fly;

use oop\Duck\Behavior\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "用翅膀飞\n";
    }
}