<?php

require_once '../vendor/autoload.php';

use oop\AdapterPattern\Adaptee\Dog;
use oop\AdapterPattern\Adaptee\Cat;
use oop\AdapterPattern\Adapter\RedAdapter;
use oop\AdapterPattern\Adapter\GreenAdapter;

class adapterDriver
{
    public function run()
    {
        //实例化一只狗玩具
        $adaptee_dog = new Dog();
        $adapter_red = new RedAdapter($adaptee_dog);
        //张嘴
        $adapter_red->doMouthOpen();
        //闭嘴
        $adapter_red->doMouthClose();
        $adapter_green = new GreenAdapter($adaptee_dog);
        //张嘴
        $adapter_green->operateMouth(1);
        //闭嘴
        $adapter_green->operateMouth(0);

        //实例化一只猫玩具
        $adaptee_dog = new Cat();
        $adapter_red = new RedAdapter($adaptee_dog);
        //张嘴
        $adapter_red->doMouthOpen();
        //闭嘴
        $adapter_red->doMouthClose();
        $adapter_green = new GreenAdapter($adaptee_dog);
        //张嘴
        $adapter_green->operateMouth(1);
        //闭嘴
        $adapter_green->operateMouth(0);
    }
}

$test = new adapterDriver();
$test->run();
