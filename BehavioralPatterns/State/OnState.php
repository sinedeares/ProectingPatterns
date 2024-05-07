<?php

namespace State;

use State\State;

class OnState implements State
{

    public function handle(): void
    {
        echo 'Телевизор включен.' . PHP_EOL;
    }
}