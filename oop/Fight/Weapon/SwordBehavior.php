<?php

namespace oop\Fight\Weapon;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo "使用宝剑\n";
    }
}