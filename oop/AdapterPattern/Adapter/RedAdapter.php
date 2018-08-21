<?php

namespace oop\AdapterPattern\Adapter;

use oop\AdapterPattern\Adaptee\Toy;
use oop\AdapterPattern\Target\RedTarget;

// 类适配器
class RedAdapter implements RedTarget
{
    private $adaptee;

    function __construct(Toy $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    //委派调用Adaptee的sampleMethod1方法
    public function doMouthOpen()
    {
        $this->adaptee->openMouth();
    }

    public function doMouthClose()
    {
        $this->adaptee->closeMouth();
    }
}
