<?php

namespace oop\Fight\Weapon;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo "使用弓箭\n";
    }
}