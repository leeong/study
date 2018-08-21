<?php

namespace oop\AdapterPattern\Adaptee;

class Dog extends Toy
{
    public function openMouth()
    {
        echo "Dog open Mouth\n";
    }

    public function closeMouth()
    {
        echo "Dog close Mouth\n";
    }
}
