<?php


require_once '../vendor/autoload.php';

$character = new \oop\Fight\Role\King(new \oop\Fight\Weapon\AxeBehavior());
$character->useWeapon();
$character->fight();
