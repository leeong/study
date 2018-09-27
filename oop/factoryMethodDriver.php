<?php

use oop\FactoryMethodPattern\DevelopmentManager;
use oop\FactoryMethodPattern\MarketingManager;

require_once '../vendor/autoload.php';

$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Asking about design patterns
$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Asking about community building.
