<?php

namespace oop\FacadePattern;


class Computer
{
    public function getElectricShock()
    {
        echo "Ouch!\n";
    }

    public function makeSound()
    {
        echo "Beep beep!\n";
    }

    public function showLoadingScreen()
    {
        echo "Loading..\n";
    }

    public function bam()
    {
        echo "Ready to be used!\n";
    }

    public function closeEverything()
    {
        echo "Bup bup bup buzzzz!\n";
    }

    public function sooth()
    {
        echo "Zzzzz\n";
    }

    public function pullCurrent()
    {
        echo "Haaah!\n";
    }
}