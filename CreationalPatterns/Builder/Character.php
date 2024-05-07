<?php

namespace Builder;

class Character
{
    private string $name;
    private string $weapon;
    private int $health;
    private int $attackPoint;

    public function setName($name) {
        $this->name = $name;
    }

    public function setWeapon($weapon) {
        $this->weapon = $weapon;
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function setAttackPoint($attackPoint) {
        $this->attackPoint = $attackPoint;
    }

    public function displayStats() {
        echo "Имя: " . $this->name . "Оружие: " . $this->weapon . ", Здоровье: " . $this->health . ", Наносимый урон: " . $this->attackPoint . "\n";
    }
}