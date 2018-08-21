<?php

namespace oop\Car;

use Exception;
use SplObserver;
use SplSubject;

class CarOverSpeedObserver implements SplObserver
{

    public function update(SplSubject $subject)
    {
        if ($subject->speed > 130) {
            throw new Exception('您已超速');
        }
    }
}
