<?php

namespace Decorator;

use Decorator\Flowers;

class FlowersWithGreetingCard implements Flowers
{
    protected $flower;

    public function __construct(FLowers $flower)
    {
        return$this->flower = $flower;
    }
    public function getDescription(): string
    {
        return $this->flower->getDescription() . " с открыткой";
    }
}