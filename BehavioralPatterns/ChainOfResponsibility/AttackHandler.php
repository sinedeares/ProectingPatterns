<?php

namespace ChainOfResponsibility;


class AttackHandler extends Handler
{
    public function handle($request): void
    {
        if ($request == "attack") {
            echo "Персонаж атакует\n";
        } elseif ($this->nextHandler != null) {
            $this->nextHandler->handle($request);
        }
    }
}