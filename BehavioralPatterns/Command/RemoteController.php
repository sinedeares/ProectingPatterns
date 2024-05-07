<?php

namespace Command;

//Invoker (Отправитель/инициатор)
class RemoteController
{
    private $commands = [];

    public function addCommand(Command $command): void
    {
        $this->commands[] = $command;
    }

    public function pressButton(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}