<?php

namespace Prototype;

abstract class UnitPrototype
{
    protected string $name;
    protected int $health;
    protected int $attackPoint;

    public function __construct($name, $health, $attackPoint) {
        $this->name = $name;
        $this->health = $health;
        $this->attackPoint = $attackPoint;
    }

    abstract public function getName();

    abstract public function getHealth();

    abstract public function getAttackPoint();
}