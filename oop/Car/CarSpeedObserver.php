<?php

namespace oop\Car;

use SplObserver;
use SplSubject;

class CarSpeedObserver implements SplObserver
{

    public function update(SplSubject $subject)
    {
        if ($subject->state) {
            echo $subject->name . '当前速度为' . $subject->speed . "\n";
        }
    }
}
