<?php
require_once '../vendor/autoload.php';

use oop\SimpleFactoryPattern\DoorFactory;

$door = DoorFactory::makeDoor(100, 200);
echo 'Width: ' . $door->getWidth() . "\n";
echo 'Height: ' . $door->getHeight() . "\n";
