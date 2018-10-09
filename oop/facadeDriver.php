<?php

use oop\FacadePattern\Computer;
use oop\FacadePattern\ComputerFacade;

require_once '../vendor/autoload.php';


$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz