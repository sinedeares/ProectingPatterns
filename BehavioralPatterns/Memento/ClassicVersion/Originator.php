<?php

namespace MementoClassic;

//класс, чьё состояние мы сохраняем и восстанавливаем
class Originator {
    private $state;

    public function __construct($state) {
        $this->state = $state;
        echo "Начальное состояние: " . $this->state . "\n";
    }

    public function doSomething(): void
    {
        echo "Изменение состояния.\n";
        $this->state = $this->generateRandomString();
    }

    private function generateRandomString(): string
    {
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
    }

    public function save(): Memento
    {
        return new Memento($this->state);
    }

    public function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
        echo "Восстановленное состояние: " . $this->state . "\n";
    }
}