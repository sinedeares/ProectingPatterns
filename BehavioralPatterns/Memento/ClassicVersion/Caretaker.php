<?php

namespace MementoClassic;

class Caretaker
{
    private $mementos = [];

    public function addMemento(Memento $memento): void
    {
        $this->mementos[] = $memento;
    }

    public function getMemento($index) {
        return $this->mementos[$index];
    }
}