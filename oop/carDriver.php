<?php

require_once '../vendor/autoload.php';

use oop\Car\CarOverSpeedObserver;
use oop\Car\CarSpeedObserver;
use oop\Car\CarStateObserver;
use oop\Car\CarSubject;

$car = new CarSubject('AE86');
$state = new CarStateObserver();
$speed = new CarSpeedObserver();
$overSpeed = new CarOverSpeedObserver();

try {
    $car->attach($state);
    $car->attach($speed);
    $car->attach($overSpeed);

    $car->start();
    $car->accelerate(10);
    $car->accelerate(20);
    $car->accelerate(40);
    $car->accelerate(50);
//    $car->accelerate(20);

    $car->stop();

    $car->detach($overSpeed);

    $car->start();
    $car->accelerate(150);
    $car->stop();

    $car->attach($overSpeed);
    $car->detach($speed);

    $car->start();
    $car->accelerate(20);

} catch (Exception $e) {
    echo $e->getMessage();
}
