<?php

namespace Bridge;

//Абстракция
abstract class Device
{
    protected $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    abstract public function play(string $track): string;

}