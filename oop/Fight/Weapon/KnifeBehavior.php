<?php

namespace oop\Fight\Weapon;

class KnifeBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo "使用匕首\n";
    }
}