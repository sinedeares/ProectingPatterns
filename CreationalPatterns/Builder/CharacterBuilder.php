<?php

namespace Builder;

interface CharacterBuilder
{
    public function setName($name);
    public function setWeapon($weapon);
    public function setHealth($health);

    public function setAttackPoint($attackPoint);

    public function getResult();
}