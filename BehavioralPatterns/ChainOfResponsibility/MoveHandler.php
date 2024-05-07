<?php

namespace ChainOfResponsibility;


class MoveHandler extends Handler
{
    public function handle($request): void
    {
        if ($request == "move") {
            echo "Персонаж двигается\n";
        } elseif ($this->nextHandler != null) {
            $this->nextHandler->handle($request);
        }
    }
}