<?php

namespace Decorator;

use Decorator\Flowers;

class BasicFlowers implements Flowers
{

    public function getDescription(): string
    {
        return "Цветы";
    }
}