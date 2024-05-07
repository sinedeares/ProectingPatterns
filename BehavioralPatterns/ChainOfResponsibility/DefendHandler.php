<?php

namespace ChainOfResponsibility;


class DefendHandler extends Handler
{
    public function handle($request): void
    {
        if ($request == "defend") {
            echo "Персонаж защищается\n";
        } elseif ($this->nextHandler != null) {
            $this->nextHandler->handle($request);
        }
    }
}