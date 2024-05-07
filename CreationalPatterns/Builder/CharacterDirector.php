<?php

namespace Builder;

class CharacterDirector
{
    public function createPaladine(CharacterBuilder $builder) {
        $builder->setHealth(100);
        $builder->setWeapon('sword');
        $builder->setAttackPoint(20);
        $builder->setName("Alex");
        return $builder->getResult();
    }

    public function createWizard(CharacterBuilder $builder) {
        $builder->setHealth(80);
        $builder->setWeapon('fire magic');
        $builder->setAttackPoint(40);
        $builder->setName("Dumbledore");
        return $builder->getResult();
    }
}