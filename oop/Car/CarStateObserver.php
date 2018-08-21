<?php

namespace oop\Car;

use SplObserver;
use SplSubject;

class CarStateObserver implements SplObserver
{

    private $subjectState;

    public function update(SplSubject $subject)
    {
        // 启动
        if ($subject->state) {
            if ($this->subjectState !== true) {
                echo $subject->name . "启动\n";
                $this->subjectState = true;
                return;
            }
        }

        // 熄火
        if (!$subject->state) {
            if ($this->subjectState === null) {
                echo $subject->name . "未启动\n";
                return;
            }

            if ($this->subjectState !== false) {
                echo $subject->name . "已熄火\n";
                $this->subjectState = false;
                return;
            }
        }
    }
}
