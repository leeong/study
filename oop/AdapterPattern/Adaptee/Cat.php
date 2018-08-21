<?php

namespace oop\AdapterPattern\Adaptee;

class Cat extends Toy
{
    public function openMouth()
    {
        echo "Cat open Mouth\n";
    }

    public function closeMouth()
    {
        echo "Cat close Mouth\n";
    }
}
