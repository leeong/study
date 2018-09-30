<?php

require_once '../vendor/autoload.php';

use oop\BuilderPattern\BurgerBuilder;


$burger = (new BurgerBuilder(14))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->build();

print_r($burger);
