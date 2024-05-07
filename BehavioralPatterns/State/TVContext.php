<?php

namespace State;


//контекст
class TVContext
{
    private $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(State $state): void
    {
        echo "Переключение на новое состояние.\n";
        $this->state = $state;
        $this->state->handle();
    }

    public function pressButton(): void
    {
        echo "Нажата кнопка\n";

    }
}