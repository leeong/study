<?php

namespace oop\Fight\Role;

use oop\Fight\Weapon\WeaponBehavior;

abstract class Character
{
    protected $weapon;

    public function __construct(WeaponBehavior $weapon)
    {
        $this->weapon = $weapon;
    }

    public function useWeapon()
    {
        $this->weapon->useWeapon();
    }

    abstract function fight();
}