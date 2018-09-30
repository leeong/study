<?php

require_once '../vendor/autoload.php';

use oop\PrototypePattern\Sheep;

$original = new Sheep('Jolly');
echo $original->getName(); // Jolly

echo "\n";

echo $original->getCategory(); // Mountain Sheep

echo "\n";

// Clone and modify what is required
$cloned = clone $original;
$cloned->setName('Dolly');
echo $cloned->getName(); // Dolly

echo "\n";

echo $cloned->getCategory(); // Mountain sheep

echo "\n";
