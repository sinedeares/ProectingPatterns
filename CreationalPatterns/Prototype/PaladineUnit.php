<?php

namespace Prototype;

use Prototype\UnitPrototype;

class PaladineUnit extends UnitPrototype
{
    public function __construct($name, $health, $attackPoint)
    {
        parent::__construct($name, $health, $attackPoint);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHealth(): int
    {
        return $this->health;
    }
    public function getAttackPoint(): int
    {
        return $this->attackPoint;
    }


    public function __clone()
    {
    }
}