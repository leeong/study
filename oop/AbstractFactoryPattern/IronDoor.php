<?php

namespace oop\AbstractFactoryPattern;

class IronDoor implements Door
{
    public function getDescription()
    {
        echo "I am an iron door\n";
    }
}
