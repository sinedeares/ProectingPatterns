<?php

namespace Decorator;

use Decorator\Flowers;

class FlowersWithGiftWrap implements Flowers
{
    protected $flower;

    public function __construct(Flowers $flower)
    {
        return $this->flower = $flower;
    }
    public function getDescription(): string
    {
        return $this->flower->getDescription() . ", завёрнутые в подарочную упаковку";
    }
}