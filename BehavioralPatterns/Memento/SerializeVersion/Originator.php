<?php

namespace MementoPHP;


//в пхп за реализацию паттерна отвечает сериализация
class Originator
{
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

    public function save(): string
    {
        return serialize($this->state);
    }

    public function restore($serializedState): void
    {
        $this->state = unserialize($serializedState);
        echo "Восстановленное состояние: " . $this->state . "\n";
    }
}