<?php

namespace Bridge;

use Bridge\Device;

class Headphones extends Device
{

    public function play(string $track): string
    {
        return $this->player->playAudio("Headphones", $track);
    }
}