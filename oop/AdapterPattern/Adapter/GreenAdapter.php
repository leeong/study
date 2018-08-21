<?php

namespace oop\AdapterPattern\Adapter;

use oop\AdapterPattern\Adaptee\Toy;
use oop\AdapterPattern\Target\GreenTarget;

// 类适配器
class GreenAdapter implements GreenTarget
{
    private $adaptee;

    function __construct(Toy $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    //委派调用Adaptee：GreenTarget的operateMouth方法
    public function operateMouth($type = 0)
    {
        if ($type) {
            $this->adaptee->openMouth();
        } else {
            $this->adaptee->closeMouth();
        }
    }
}
