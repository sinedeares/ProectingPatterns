<?php

namespace Bridge;

use Bridge\Device;

class Speaker extends Device
{

    public function play(string $track): string
    {
        return $this->player->playAudio("Speaker", $track);
    }
}