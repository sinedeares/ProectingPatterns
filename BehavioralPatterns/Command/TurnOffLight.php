<?php

namespace Command;

use Command\Command;

class TurnOffLight implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }


    public function execute(): void
    {
        $this->light->turnOff();
    }
}