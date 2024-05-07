<?php

namespace Command;

//Receiver
class Light
{
    public function turnOn(): void
    {
        echo "Свет включен\n";
    }

    public function turnOff(): void
    {
        echo "Свет выключен\n";
    }
}