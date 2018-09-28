<?php

namespace oop\AbstractFactoryPattern;

class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo "I am a wooden door\n";
    }
}
