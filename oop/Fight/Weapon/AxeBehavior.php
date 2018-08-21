<?php

namespace oop\Fight\Weapon;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo "使用斧头\n";
    }
}