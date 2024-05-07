<?php

namespace State;

class OffState implements State
{
    public function handle(): void
    {
        echo 'Телевизор выключен.' . PHP_EOL;
    }
}