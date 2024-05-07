<?php

namespace Builder;

use Builder\CharacterBuilder;

class PaladineBuilder implements CharacterBuilder
{
    private $character;

    public function __construct()
    {
        $this->character = new Character();
    }
    public function setName($name)
    {
        $this->character->setName($name);
    }

    public function setWeapon($weapon)
    {
        $this->character->setWeapon($weapon);
    }

    public function setHealth($health)
    {
        $this->character->setHealth($health);
    }

    public function setAttackPoint($attackPoint)
    {
        $this->character->setAttackPoint($attackPoint);
    }

    public function getResult()
    {
        return $this->character;
    }
}