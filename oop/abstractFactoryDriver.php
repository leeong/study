<?php

use oop\AbstractFactoryPattern\IronDoorFactory;
use oop\AbstractFactoryPattern\WoodenDoorFactory;

require_once '../vendor/autoload.php';


$woodenFactory = new WoodenDoorFactory();
$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();
$door->getDescription();
// Output: I am a wooden door
$expert->getDescription(); // Output: I can only fit wooden doors

// Same for Iron Factory
$ironFactory = new IronDoorFactory();
$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();
$door->getDescription();
// Output: I am an iron door
$expert->getDescription(); // Output: I can only fit iron doors
